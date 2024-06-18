<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Security_CommandHandler_ClearEmployeeSessionHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.security.command_handler.clear_employee_session_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\CommandHandler\ClearOutdatedEmployeeSessionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.security.command_handler.clear_employee_session_handler'] = new \PrestaShop\PrestaShop\Adapter\Security\CommandHandler\ClearOutdatedEmployeeSessionHandler(($container->services['prestashop.adapter.security.repository.employee_session_repository'] ?? $container->load('getPrestashop_Adapter_Security_Repository_EmployeeSessionRepositoryService')));
    }
}
