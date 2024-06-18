<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDuplicateProductHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\DuplicateProductHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\DuplicateProductHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\DuplicateProductHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\DuplicateProductHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductDuplicator'] ?? $container->load('getProductDuplicatorService')));
    }
}