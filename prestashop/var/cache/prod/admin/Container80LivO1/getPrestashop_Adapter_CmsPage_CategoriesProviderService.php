<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CmsPage_CategoriesProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cms_page.categories_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CategoriesProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cms_page.categories_provider'] = new \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CategoriesProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguage()->id, ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context())->getContextListShopID());
    }
}
