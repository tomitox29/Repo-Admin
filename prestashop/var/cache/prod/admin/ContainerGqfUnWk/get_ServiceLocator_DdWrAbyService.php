<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DdWrAbyService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.DdWrAby' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DdWrAby'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator.DdWrAby.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProfileFilters', NULL, 'Cannot autowire service ".service_locator.DdWrAby": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProfileFilters" but no such service exists.'],
        ], [
            'filters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProfileFilters',
        ]);
    }
}
