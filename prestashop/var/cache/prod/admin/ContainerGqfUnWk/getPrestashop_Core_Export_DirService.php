<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Export_DirService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.export.dir' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Export\ExportDirectory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.export.dir'] = new \PrestaShop\PrestaShop\Core\Export\ExportDirectory(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
