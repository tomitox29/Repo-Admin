<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HULagPLService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.hULagPL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hULagPL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'employeeHomepageProvider' => ['services', 'PrestaShopBundle\\Security\\Admin\\EmployeeHomepageProvider', 'getEmployeeHomepageProviderService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', false],
        ], [
            'employeeHomepageProvider' => 'PrestaShopBundle\\Security\\Admin\\EmployeeHomepageProvider',
            'security' => '?',
        ]);
    }
}
