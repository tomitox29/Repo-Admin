<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_OrderGift_ConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order_gift.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Order\GiftOptionsConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order_gift.configuration'] = new \PrestaShop\PrestaShop\Adapter\Order\GiftOptionsConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)));
    }
}