<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Addon_Theme_ThemeZipUploaderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.addon.theme.theme_zip_uploader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeZipUploader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.addon.theme.theme_zip_uploader'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeZipUploader(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}