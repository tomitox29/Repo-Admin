<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_GeolocationIpAddressWhitelist_ConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.geolocation_ip_address_whitelist.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Geolocation\GeolocationIpAddressWhitelistConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.geolocation_ip_address_whitelist.configuration'] = new \PrestaShop\PrestaShop\Adapter\Geolocation\GeolocationIpAddressWhitelistConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
