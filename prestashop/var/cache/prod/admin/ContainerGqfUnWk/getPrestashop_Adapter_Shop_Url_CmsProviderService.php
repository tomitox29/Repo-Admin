<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Shop_Url_CmsProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.shop.url.cms_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Shop\Url\CmsProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.shop.url.cms_provider'] = new \PrestaShop\PrestaShop\Adapter\Shop\Url\CmsProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->link);
    }
}
