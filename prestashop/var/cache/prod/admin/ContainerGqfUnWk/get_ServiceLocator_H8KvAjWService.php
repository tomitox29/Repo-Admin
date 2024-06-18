<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H8KvAjWService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.H8KvAjW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H8KvAjW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'employeeContext' => ['privates', 'PrestaShop\\PrestaShop\\Core\\Context\\EmployeeContext', 'getEmployeeContextService', false],
        ], [
            'employeeContext' => 'PrestaShop\\PrestaShop\\Core\\Context\\EmployeeContext',
        ]);
    }
}
