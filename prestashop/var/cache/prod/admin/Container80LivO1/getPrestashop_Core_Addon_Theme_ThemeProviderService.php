<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Addon_Theme_ThemeProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.addon.theme.theme_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.addon.theme.theme_provider'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeProvider(($container->services['prestashop.core.addon.theme.repository'] ?? $container->load('getPrestashop_Core_Addon_Theme_RepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->theme);
    }
}
