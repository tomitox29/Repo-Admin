<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_OrderReturnState_CommandHandler_BulkDeleteOrderReturnStateHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order_return_state.command_handler.bulk_delete_order_return_state_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler\BulkDeleteOrderReturnStateHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order_return_state.command_handler.bulk_delete_order_return_state_handler'] = new \PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler\BulkDeleteOrderReturnStateHandler();
    }
}
