<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Domain_Theme_CommandHandler_DeleteThemeHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.domain.theme.command_handler.delete_theme_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\DeleteThemeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.domain.theme.command_handler.delete_theme_handler'] = new \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\DeleteThemeHandler(($container->services['prestashop.core.addon.theme.theme_manager'] ?? $container->load('getPrestashop_Core_Addon_Theme_ThemeManagerService')));
    }
}