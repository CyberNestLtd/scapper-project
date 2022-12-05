<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\ArrayInput;
#[AsCommand(
    name: 'Scraper',
    description: 'Add a short description for your command',
)]
class ScraperCommand extends Command
{
    private $output;
    protected function configure(): void {}

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $this->output = $output;
        try {
            $command = $this->getApplication()->find('publisher');
            
            $arguments = [
                'url'  => 'https://highload.today/uk/',
                'port' => 9400,
            ];

            $inputs = new ArrayInput($arguments);
            $returnCode = $command->run($inputs, $this->output);

            $io->success('Publisher and workers started successfully');

            $command = $this->getApplication()->find('worker');
            foreach ([9500, 9600, 9700, 9800] as $port) {            
                $arguments = [
                    'port' => $port,
                ];
                $inputs = new ArrayInput($arguments);
                $returnCode = $command->run($inputs, $this->output);
            }

            return Command::SUCCESS;
        } catch (\Exception $e) {
            return Command::FAILURE;
        }
    }
}
