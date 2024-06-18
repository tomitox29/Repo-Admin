<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSetProductDefaultSupplierHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler\SetProductDefaultSupplierHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler\SetProductDefaultSupplierHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Supplier\\CommandHandler\\SetProductDefaultSupplierHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler\SetProductDefaultSupplierHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductSupplierUpdater'] ?? $container->load('getProductSupplierUpdaterService')));
    }
}
