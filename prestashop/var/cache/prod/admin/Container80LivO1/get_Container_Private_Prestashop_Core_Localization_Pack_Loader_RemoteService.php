<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Localization_Pack_Loader_RemoteService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.localization.pack.loader.remote' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\RemoteLocalizationPackLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.localization.pack.loader.remote'] = new \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\RemoteLocalizationPackLoader(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['.container.private.prestashop.core.foundation.version'] ?? $container->load('get_Container_Private_Prestashop_Core_Foundation_VersionService')));
    }
}