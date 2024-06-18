<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFooterTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\FooterType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\FooterType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\FooterType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\FooterType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\FooterType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\FooterType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['prestashop.adapter.shop.url.product_provider'] ?? $container->load('getPrestashop_Adapter_Shop_Url_ProductProviderService')), ($container->services['prestashop.adapter.shop.url.product_preview_provider'] ?? $container->load('getPrestashop_Adapter_Shop_Url_ProductPreviewProviderService')), $a, ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id);
    }
}