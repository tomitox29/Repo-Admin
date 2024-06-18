<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_TrafficSeo_MetaSettings_SeoOptions_FormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.traffic_seo.meta_settings.seo_options.form_data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta\MetaSettingsSeoOptionsFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.traffic_seo.meta_settings.seo_options.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta\MetaSettingsSeoOptionsFormDataProvider(($container->services['prestashop.adapter.meta.seo_options.configuration'] ?? $container->load('getPrestashop_Adapter_Meta_SeoOptions_ConfigurationService')));
    }
}