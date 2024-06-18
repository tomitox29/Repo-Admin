<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_ShippingPreferences_Handling_FormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.shipping_preferences.handling.form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\Handler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.shipping_preferences.handling.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.admin.shipping_preferences.handling.data_provider'] ?? $container->load('getPrestashop_Admin_ShippingPreferences_Handling_DataProviderService')), 'PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences\\HandlingType', 'ShippingPreferencesPageHandling', 'handling');
    }
}
