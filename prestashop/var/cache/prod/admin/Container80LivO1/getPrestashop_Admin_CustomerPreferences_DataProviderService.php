<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_CustomerPreferences_DataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.customer_preferences.data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\ShopParameters\CustomerPreferences\CustomerPreferencesDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.customer_preferences.data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\CustomerPreferences\CustomerPreferencesDataProvider(($container->services['prestashop.adapter.customer.customer_configuration'] ?? $container->load('getPrestashop_Adapter_Customer_CustomerConfigurationService')));
    }
}