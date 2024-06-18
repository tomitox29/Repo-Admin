<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Security_CommandHandler_BulkDeleteCustomersSessionsHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.security.command_handler.bulk_delete_customers_sessions_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\CommandHandler\BulkDeleteCustomerSessionsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.security.command_handler.bulk_delete_customers_sessions_handler'] = new \PrestaShop\PrestaShop\Adapter\Security\CommandHandler\BulkDeleteCustomerSessionsHandler(($container->services['prestashop.adapter.security.repository.customer_session_repository'] ?? $container->load('getPrestashop_Adapter_Security_Repository_CustomerSessionRepositoryService')));
    }
}
