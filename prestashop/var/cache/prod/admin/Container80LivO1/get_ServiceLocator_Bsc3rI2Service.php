<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bsc3rI2Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.bsc3rI2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bsc3rI2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator.bsc3rI2.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProductCombinationFilters', NULL, 'Cannot autowire service ".service_locator.bsc3rI2": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProductCombinationFilters" but no such service exists.'],
        ], [
            'filters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProductCombinationFilters',
        ]);
    }
}
