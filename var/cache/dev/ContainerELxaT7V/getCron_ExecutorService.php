<?php

namespace ContainerELxaT7V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCron_ExecutorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cron.executor' shared service.
     *
     * @return \Cron\Executor\Executor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/cron/cron/src/Executor/ExecutorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/cron/cron/src/Executor/Executor.php';

        return $container->services['cron.executor'] = new \Cron\Executor\Executor();
    }
}
