<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Order_CommandHandler_ChangeOrderCurrencyHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order.command_handler.change_order_currency_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\ChangeOrderCurrencyHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order.command_handler.change_order_currency_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\ChangeOrderCurrencyHandler();
    }
}
