<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Order_OrderSiblingProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order.order_sibling_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Order\OrderSiblingProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order.order_sibling_provider'] = new \PrestaShop\PrestaShop\Adapter\Order\OrderSiblingProvider();
    }
}
