<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Profile_Employee_CommandHandler_BulkDeleteEmployeeHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.profile.employee.command_handler.bulk_delete_employee_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler\BulkDeleteEmployeeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.profile.employee.command_handler.bulk_delete_employee_handler'] = new \PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler\BulkDeleteEmployeeHandler();
    }
}
