<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHeaderTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\HeaderType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\HeaderType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['form.type.sell.product.toolbar_buttons_provider'] ?? $container->load('getForm_Type_Sell_Product_ToolbarButtonsProviderService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\HeaderType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\HeaderType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\HeaderType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\HeaderType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_STOCK_MANAGEMENT"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_USE_ECOTAX"), $a);
    }
}
