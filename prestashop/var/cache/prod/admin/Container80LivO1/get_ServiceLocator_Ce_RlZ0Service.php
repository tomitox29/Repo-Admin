<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ce_RlZ0Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.Ce.RlZ0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ce.RlZ0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator.Ce.RlZ0.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\RequestSqlFilters', NULL, 'Cannot autowire service ".service_locator.Ce.RlZ0": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\RequestSqlFilters" but no such service exists.'],
        ], [
            'filters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\RequestSqlFilters',
        ]);
    }
}
