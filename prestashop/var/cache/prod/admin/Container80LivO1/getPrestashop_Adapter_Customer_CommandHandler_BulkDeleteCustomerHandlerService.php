<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Customer_CommandHandler_BulkDeleteCustomerHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.customer.command_handler.bulk_delete_customer_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\BulkDeleteCustomerHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.customer.command_handler.bulk_delete_customer_handler'] = new \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\BulkDeleteCustomerHandler();
    }
}