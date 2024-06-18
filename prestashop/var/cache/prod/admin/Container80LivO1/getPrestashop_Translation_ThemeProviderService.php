<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_ThemeProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.theme_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\ThemeProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.translation.theme_provider'] = $instance = new \PrestaShopBundle\Translation\Provider\ThemeProvider(($container->services['prestashop.translation.database_loader'] ?? $container->load('getPrestashop_Translation_DatabaseLoaderService')), ($container->targetDir.''.'/themes'));

        $instance->themeResourcesDirectory = (\dirname(__DIR__, 5).'/themes');
        $instance->filesystem = ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem());
        $instance->themeRepository = ($container->services['prestashop.core.addon.theme.repository'] ?? $container->load('getPrestashop_Core_Addon_Theme_RepositoryService'));
        $instance->themeExtractor = ($container->services['prestashop.translation.theme_extractor'] ?? $container->load('getPrestashop_Translation_ThemeExtractorService'));
        $instance->defaultTranslationDir = (\dirname(__DIR__, 5).'/translations');

        return $instance;
    }
}
