<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Order_CommandHandler_DeleteCartRuleFromOrderHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order.command_handler.delete_cart_rule_from_order_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\DeleteCartRuleFromOrderHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order.command_handler.delete_cart_rule_from_order_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\DeleteCartRuleFromOrderHandler(($container->services['prestashop.adapter.order.amount.updater'] ?? $container->load('getPrestashop_Adapter_Order_Amount_UpdaterService')), ($container->services['prestashop.adapter.order.product_quantity.updater'] ?? $container->load('getPrestashop_Adapter_Order_ProductQuantity_UpdaterService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] ?? self::getContextStateManagerService($container)));
    }
}
