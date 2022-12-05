<?php

namespace ContainerELxaT7V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublishCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\PublishCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\PublishCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('publisher', [], 'Add a short description for your command', false, function () use ($container): \App\Command\PublishCommand {
            return ($container->privates['App\\Command\\PublishCommand'] ?? $container->load('getPublishCommandService'));
        });
    }
}
