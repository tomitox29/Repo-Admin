<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Employee_DataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.employee.data_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Employee\EmployeeDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.employee.data_provider'] = new \PrestaShop\PrestaShop\Adapter\Employee\EmployeeDataProvider();
    }
}
