<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RY3E3agService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.rY3E3ag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rY3E3ag'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator.rY3E3ag.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\Security\\Session\\EmployeeFilters', NULL, 'Cannot autowire service ".service_locator.rY3E3ag": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\Security\\Session\\EmployeeFilters" but no such service exists.'],
        ], [
            'filters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\Security\\Session\\EmployeeFilters',
        ]);
    }
}