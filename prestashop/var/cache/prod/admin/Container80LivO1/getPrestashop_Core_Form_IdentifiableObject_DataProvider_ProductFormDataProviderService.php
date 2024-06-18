<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_DataProvider_ProductFormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.data_provider.product_form_data_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\ProductFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.data_provider.product_form_data_provider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\ProductFormDataProvider(($container->services['prestashop.core.query_bus'] ?? $container->load('getPrestashop_Core_QueryBusService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id, ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getInt("PS_SHOP_DEFAULT"), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context())->getContextShopID(), ($container->services['.container.private.prestashop.adapter.form.choice_provider.features_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Adapter_Form_ChoiceProvider_FeaturesChoiceProviderService')));
    }
}
