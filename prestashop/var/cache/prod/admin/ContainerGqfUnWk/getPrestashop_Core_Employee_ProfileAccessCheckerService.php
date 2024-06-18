<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Employee_ProfileAccessCheckerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.employee.profile_access_checker' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Employee\Access\ProfileAccessChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.employee.profile_access_checker'] = new \PrestaShop\PrestaShop\Core\Employee\Access\ProfileAccessChecker(($container->services['prestashop.adapter.employee.data_provider'] ??= new \PrestaShop\PrestaShop\Adapter\Employee\EmployeeDataProvider()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getInt("_PS_ADMIN_PROFILE_"));
    }
}
