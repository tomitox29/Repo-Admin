<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5nACDIWService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.5nACDIW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5nACDIW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'combinationFilters' => ['privates', '.errored..service_locator.5nACDIW.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProductCombinationFilters', NULL, 'Cannot autowire service ".service_locator.5nACDIW": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProductCombinationFilters" but no such service exists.'],
        ], [
            'combinationFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\ProductCombinationFilters',
        ]);
    }
}
