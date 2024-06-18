<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_ProductStock_ConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.product_stock.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\StockConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.product_stock.configuration'] = new \PrestaShop\PrestaShop\Adapter\Product\StockConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}