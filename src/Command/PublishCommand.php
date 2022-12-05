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
use App\Entity\ScrapPage;
use App\Entity\Picture;
use Symfony\Component\Panther\Client;

#[AsCommand(
    name: 'publisher',
    description: 'Add a short description for your command',
)]
class PublishCommand extends Command
{
    /** @var \PhpAmqpLib\Connection\AMQPStreamConnection  */
    private $connection;

    /**
     * @var \PhpAmqpLib\Channel\AMQPChannel
     */
    private $channel;

    private $queueName;

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
            ->addArgument('url', InputArgument::REQUIRED, 'Argument description')
            ->addArgument('port', InputArgument::REQUIRED, 'Argument description')
            ->addArgument('type', InputArgument::OPTIONAL, 'Argument description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $url = $input->getArgument('url');
        $port = (int) $input->getArgument('port') ;
        $type = $input->getArgument('type') ;

        $io->comment('START scraper');

        $client = Client::createChromeClient(
          options: [
            'port' => $port
          ]
        );
        $client->request('GET', $url);

        $crawler = $client->waitFor('div.sidebar-left ul li a');
        if ($type && $type == 'menu') {
            $links = $crawler->filterXpath('//div[contains(@class,"sidebar-center")]//div[@class="lenta-item"]//div[@class="author-block"]/following-sibling::a')->extract(array('href'));
        } else {
            $links = $crawler->filterXpath('//div[contains(@class,"sidebar-left")]//ul/li[not(contains(@class, "d-none"))]/a')
                ->extract(array('href'));
        }

        try {
            $io->note('Creating queues. To stop press CTRL+C');

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

            $job_id = 0;
            foreach ($links as $link) {
                $jobArray = array(
                    'id' => $job_id++,
                    'url' => $link,
                );

                if ($type && $type == 'menu') {
                    $jobArray['type'] = 'page';
                } else {
                    $jobArray['type'] = 'menu';
                }

                $msg = new AMQPMessage(
                    json_encode($jobArray, JSON_UNESCAPED_SLASHES),
                    array('delivery_mode' => 2) # make message persistent
                );

                $this->channel->basic_publish($msg, '', $this->queueName);
                $io->comment('Job created '. $job_id);
                sleep(1);
            }

            $io->success('DONE!!!');
            return Command::SUCCESS;
        } catch (\ErrorException $error) {
            $io->error($error->getMessage());
            return Command::FAILURE;
        }
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
