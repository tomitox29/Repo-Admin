<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Employee_FormAccessCheckerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.employee.form_access_checker' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Employee\EmployeeFormAccessChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.employee.form_access_checker'] = new \PrestaShop\PrestaShop\Adapter\Employee\EmployeeFormAccessChecker(($container->services['prestashop.adapter.data_provider.employee'] ?? $container->load('getPrestashop_Adapter_DataProvider_EmployeeService')), ($container->services['prestashop.adapter.employee.data_provider'] ??= new \PrestaShop\PrestaShop\Adapter\Employee\EmployeeDataProvider()));
    }
}
