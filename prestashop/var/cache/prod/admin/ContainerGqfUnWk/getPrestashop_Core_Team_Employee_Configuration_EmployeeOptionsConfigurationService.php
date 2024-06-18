<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Team_Employee_Configuration_EmployeeOptionsConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.team.employee.configuration.employee_options_configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\EmployeeOptionsConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.team.employee.configuration.employee_options_configuration'] = new \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\EmployeeOptionsConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['prestashop.core.team.employee.configuration.options_checker'] ?? $container->load('getPrestashop_Core_Team_Employee_Configuration_OptionsCheckerService')));
    }
}