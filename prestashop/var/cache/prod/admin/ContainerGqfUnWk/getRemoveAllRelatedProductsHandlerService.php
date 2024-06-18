<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveAllRelatedProductsHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllRelatedProductsHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllRelatedProductsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\RemoveAllRelatedProductsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllRelatedProductsHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\RelatedProductsUpdater'] ?? $container->load('getRelatedProductsUpdaterService')));
    }
}