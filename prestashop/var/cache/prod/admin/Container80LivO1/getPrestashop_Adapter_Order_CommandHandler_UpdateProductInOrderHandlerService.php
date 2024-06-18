<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Order_CommandHandler_UpdateProductInOrderHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order.command_handler.update_product_in_order_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\UpdateProductInOrderHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order.command_handler.update_product_in_order_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\UpdateProductInOrderHandler(($container->services['prestashop.adapter.order.product_quantity.updater'] ?? $container->load('getPrestashop_Adapter_Order_ProductQuantity_UpdaterService')), ($container->services['prestashop.adapter.order.order_detail.updater'] ?? $container->load('getPrestashop_Adapter_Order_OrderDetail_UpdaterService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] ?? self::getContextStateManagerService($container)));
    }
}
