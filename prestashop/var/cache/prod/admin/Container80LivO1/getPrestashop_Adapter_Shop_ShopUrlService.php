<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Shop_ShopUrlService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.shop.shop_url' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Shop\ShopUrlDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.shop.shop_url'] = new \PrestaShop\PrestaShop\Adapter\Shop\ShopUrlDataProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id);
    }
}
