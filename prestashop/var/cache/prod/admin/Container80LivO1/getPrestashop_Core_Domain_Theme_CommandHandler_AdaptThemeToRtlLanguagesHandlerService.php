<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Domain_Theme_CommandHandler_AdaptThemeToRtlLanguagesHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.domain.theme.command_handler.adapt_theme_to_rtl_languages_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\AdaptThemeToRTLLanguagesHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.domain.theme.command_handler.adapt_theme_to_rtl_languages_handler'] = new \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\AdaptThemeToRTLLanguagesHandler(new \PrestaShop\PrestaShop\Core\Localization\RTL\StyleSheetProcessorFactory(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())));
    }
}