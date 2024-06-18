<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_ShippingPreferences_CarrierOptionsConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.shipping_preferences.carrier_options_configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Carrier\CarrierOptionsConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.shipping_preferences.carrier_options_configuration'] = new \PrestaShop\PrestaShop\Adapter\Carrier\CarrierOptionsConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)));
    }
}
