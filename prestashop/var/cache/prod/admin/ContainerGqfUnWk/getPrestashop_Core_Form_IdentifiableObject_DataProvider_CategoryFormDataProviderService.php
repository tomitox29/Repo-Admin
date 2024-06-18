<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_DataProvider_CategoryFormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.data_provider.category_form_data_provider' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\CategoryFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.data_provider.category_form_data_provider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\CategoryFormDataProvider(($container->services['prestashop.core.query_bus'] ?? $container->load('getPrestashop_Core_QueryBusService')), ($container->services['prestashop.adapter.group.group_data_provider'] ??= new \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider()), ($container->services['prestashop.adapter.shop.url.category_provider'] ?? $container->load('getPrestashop_Adapter_Shop_Url_CategoryProviderService')), ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\ShopContext'] ?? $container->load('getShopContextService')));
    }
}
