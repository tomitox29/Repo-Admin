<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_SmartyCache_ConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.smarty_cache.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Smarty\SmartyCacheConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.smarty_cache.configuration'] = new \PrestaShop\PrestaShop\Adapter\Smarty\SmartyCacheConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
