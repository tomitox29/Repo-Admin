<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Preferences_ConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.preferences.configuration' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Preferences\PreferencesConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.preferences.configuration'] = new \PrestaShop\PrestaShop\Adapter\Preferences\PreferencesConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
