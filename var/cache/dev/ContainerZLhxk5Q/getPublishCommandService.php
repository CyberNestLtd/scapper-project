<?php

namespace ContainerZLhxk5Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublishCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\PublishCommand' shared autowired service.
     *
     * @return \App\Command\PublishCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/PublishCommand.php';

        $container->privates['App\\Command\\PublishCommand'] = $instance = new \App\Command\PublishCommand($container->getEnv('RABBITMQ_HOST'), $container->getEnv('RABBITMQ_PORT'), $container->getEnv('RABBITMQ_USERNAME'), $container->getEnv('RABBITMQ_PASSWORD'), $container->getEnv('RABBITMQ_QUEUE_NAME'));

        $instance->setName('publisher');
        $instance->setDescription('Add a short description for your command');

        return $instance;
    }
}