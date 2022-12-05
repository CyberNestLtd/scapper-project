<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\KernelInterface;
use App\Entity\ScrapPage;
use App\Entity\Picture;
use Symfony\Component\Panther\Client;

#[AsCommand(
    name: 'scrap',
    description: 'Add a short description for your command',
)]
class ScrapCommand extends Command
{
    private $doctrine;
    private $projectDir;

    private $io;

    public function __construct(ManagerRegistry $doctrine, KernelInterface $kernel)
    {
        $this->doctrine = $doctrine;
        $this->projectDir = $kernel->getProjectDir();

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('url', InputArgument::REQUIRED, 'Argument description')
            ->addArgument('port', InputArgument::REQUIRED, 'Argument description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $this->io = $io;

        $url = $input->getArgument('url');
        $port = (int) $input->getArgument('port') ;

        $client = Client::createChromeClient(
          options: [
              'port' => $port,
          ]
        );
        $crawler = $client->request('GET', $url);
        try {
            $client->waitFor('//p/img[contains(@class, "entered")]');
        } catch (\Exception $e) {
            $io->info('Not waiting for image to load.');
        }

        $this->createScrapPage($crawler);

        $io->success('Page scraped successfully.');

        return Command::SUCCESS;
    }

    protected function createScrapPage($crawler): int
    {
        try {
            $entityManager = $this->doctrine->getManager();

            $scrapPage = new ScrapPage();
            $scrapPage
                ->setTitle($crawler->filter('h1')->text())
                ->setDescription($crawler->filterXpath("//*[@class='author-right']")->text())
                ->setBody($crawler->filterXpath("//*[@class='content-inner']")->text())
            ;

            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
            $scrapPage->setCreatedAt($dateTime);
            $scrapPage->setUpdatedAt($dateTime);
            $entityManager->persist($scrapPage);

            $this->saveImages($crawler, $scrapPage, $entityManager);

            $entityManager->flush();


            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->io->info('Unable to save page to database.' . $e);
            return Command::INVALID;
        }
    }

    public function saveImages($crawler, $scrapPage, $entityManager) {
          $images = $crawler
              ->filterXpath('//p/img')
              ->extract(array('src'));

          foreach($images as $image) {
              try {
                  $path = $this->projectDir . '/assets/images/' . strtotime(date('Y-m-d H:i:s')) . '.jpg';
                  file_put_contents($path, file_get_contents($image));

                  $picture = new Picture();
                  $picture->setPath($path);
                  $entityManager->persist($picture);  
                  $scrapPage->addPicture($picture);
              } catch (\Exception $e) {
                  $this->io->info('Unable to save picture to database.' . $e);
              }
          }
    }
}
