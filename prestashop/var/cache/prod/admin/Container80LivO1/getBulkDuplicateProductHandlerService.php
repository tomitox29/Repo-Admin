<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBulkDuplicateProductHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkDuplicateProductHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkDuplicateProductHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\BulkDuplicateProductHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkDuplicateProductHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductDuplicator'] ?? $container->load('getProductDuplicatorService')));
    }
}
