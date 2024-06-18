<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Order_Refund_OrderSlipCreatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order.refund.order_slip_creator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderSlipCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order.refund.order_slip_creator'] = new \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderSlipCreator(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
