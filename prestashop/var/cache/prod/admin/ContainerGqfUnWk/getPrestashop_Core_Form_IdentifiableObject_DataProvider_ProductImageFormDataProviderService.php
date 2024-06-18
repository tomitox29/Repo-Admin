<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_DataProvider_ProductImageFormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.data_provider.product_image_form_data_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\ProductImageFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.data_provider.product_image_form_data_provider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\ProductImageFormDataProvider(($container->services['prestashop.core.query_bus'] ?? $container->load('getPrestashop_Core_QueryBusService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id);
    }
}