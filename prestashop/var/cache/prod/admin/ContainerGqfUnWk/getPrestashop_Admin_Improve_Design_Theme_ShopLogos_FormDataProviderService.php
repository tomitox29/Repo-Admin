<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_Improve_Design_Theme_ShopLogos_FormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.improve.design.theme.shop_logos.form_data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\Design\Theme\ShopLogosFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.improve.design.theme.shop_logos.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\Design\Theme\ShopLogosFormDataProvider(($container->services['prestashop.core.command_bus'] ?? $container->load('getPrestashop_Core_CommandBusService')), ($container->services['prestashop.adapter.theme.theme_multi_store_settings_form_data_provider'] ?? $container->load('getPrestashop_Adapter_Theme_ThemeMultiStoreSettingsFormDataProviderService')));
    }
}