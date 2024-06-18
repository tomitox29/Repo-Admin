<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditProductFormTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\EditProductFormType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\EditProductFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['form.type.sell.product.toolbar_buttons_provider'] ?? $container->load('getForm_Type_Sell_Product_ToolbarButtonsProviderService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\EditProductFormType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\EditProductFormType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\EditProductFormType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\EditProductFormType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.form.type.sell.product.event_listener.product_type_listener'] ?? $container->load('get_Container_Private_Form_Type_Sell_Product_EventListener_ProductTypeListenerService')), $a);
    }
}