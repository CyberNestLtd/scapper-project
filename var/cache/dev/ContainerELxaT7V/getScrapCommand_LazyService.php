<?php

namespace ContainerELxaT7V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScrapCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\ScrapCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\ScrapCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('scrap', [], 'Add a short description for your command', false, function () use ($container): \App\Command\ScrapCommand {
            return ($container->privates['App\\Command\\ScrapCommand'] ?? $container->load('getScrapCommandService'));
        });
    }
}
