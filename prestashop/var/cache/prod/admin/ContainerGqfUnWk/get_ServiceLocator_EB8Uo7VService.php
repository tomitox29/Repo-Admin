<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EB8Uo7VService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.EB8Uo7V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EB8Uo7V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator.EB8Uo7V.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\SupplierFilters', NULL, 'Cannot autowire service ".service_locator.EB8Uo7V": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\SupplierFilters" but no such service exists.'],
        ], [
            'filters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\SupplierFilters',
        ]);
    }
}