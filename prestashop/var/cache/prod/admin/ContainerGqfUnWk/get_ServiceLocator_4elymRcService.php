<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4elymRcService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.4elymRc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4elymRc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'exception' => ['privates', '.errored..service_locator.4elymRc.Throwable', NULL, 'Cannot autowire service ".service_locator.4elymRc": it references interface "Throwable" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'exception' => 'Throwable',
        ]);
    }
}
