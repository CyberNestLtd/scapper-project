<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\Console\Input\ArrayInput;

#[AsCommand(
    name: 'worker',
    description: 'Add a short description for your command',
)]
class WorkerCommand extends Command
{
    /** @var \PhpAmqpLib\Connection\AMQPStreamConnection  */
    private $connection;

    /**
     * @var \PhpAmqpLib\Channel\AMQPChannel
     */
    private $channel;

    private $queueName;

    private $input;
    private $output;

    private $io;

    /**
     * WorkerCommand constructor.
     * @param $host
     * @param $port
     * @param $username
     * @param $password
     * @param $queueName
     */
    public function __construct($host, $port, $username, $password, $queueName) {
        parent::__construct();
        $this->connection = new AMQPStreamConnection($host, $port, $username, $password);
        $this->channel = $this->connection->channel();
        $this->queueName = $queueName;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('port', InputArgument::REQUIRED, 'Argument description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->comment('START worker');


        $this->output = $output;
        $this->input = $input;
        $this->io = $io;

        try {
            $io->note('Waiting for jobs. To exit press CTRL+C');

            # Create the queue if it does not already exist.
            $this->channel->queue_declare(
                $queue = $this->queueName,
                $passive = false,
                $durable = true,
                $exclusive = false,
                $auto_delete = false,
                $nowait = false,
                $arguments = null,
                $ticket = null
            );

            $callback = function ($msg) {
                echo " [x] Received ", $msg->body, "\n";
                $job = json_decode($msg->body,true);
                $returnCode = 1;
                try {
                    if ($job['type'] == 'menu') {
                      $command = $this->getApplication()->find('publisher');
                      
                      $arguments = [
                          'url'  => $job['url'],
                          'port' => $this->input->getArgument('port'),
                          'type' => 'menu',
                      ];

                      $inputs = new ArrayInput($arguments);
                      $returnCode = $command->run($inputs, $this->output);
                      if ($returnCode == Command::SUCCESS) {
                          echo " [x] Links from menu queued", "\n\n";
                      } else {
                          echo " [x] Faliure. Status Code " . $returnCode, "\n\n";
                      }
                    } else {
                      $command = $this->getApplication()->find('scrap');
                      
                      $arguments = [
                          'url' => $job['url'],
                          'port' => $this->input->getArgument('port'),
                      ];

                      $inputs = new ArrayInput($arguments);
                      $returnCode = $command->run($inputs, $this->output);
                      if ($returnCode == Command::SUCCESS) {
                          echo " [x]" . $job['url'] . "scrapped successfully!", "\n\n";
                      } else {
                          echo " [x] Faliure. Status Code " . $returnCode, "\n\n";
                      }
                    }

                    $msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
                } catch (\ErrorException $error) {
                    $this->io->error($error->getMessage());
                    echo " [x] Faliure. Status Code " . $returnCode, ". Skipping this entry for now\n\n";
                    $msg->delivery_info['channel']->basic_reject($msg->delivery_info['delivery_tag'], true);
                }     
            };

            $this->channel->basic_qos(null, 1, null);

            $this->channel->basic_consume(
                $queue = $this->queueName,
                $consumer_tag = '',
                $no_local = false,
                $no_ack = false,
                $exclusive = false,
                $nowait = false,
                $callback
            );

            while (count($this->channel->callbacks)) {
                $this->channel->wait();
            }

            $io->success('DONE!!!');
            return Command::SUCCESS;
        } catch (\ErrorException $error) {
            $io->error($error->getMessage());
        }

        return Command::SUCCESS;
    }

    /**
     * @throws \Exception
     */
    public function __destruct()
    {
        $this->channel->close();
        $this->connection->close();
    }
}