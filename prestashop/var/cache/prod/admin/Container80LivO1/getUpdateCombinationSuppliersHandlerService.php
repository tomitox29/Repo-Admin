<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateCombinationSuppliersHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\UpdateCombinationSuppliersHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\UpdateCombinationSuppliersHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\CommandHandler\\UpdateCombinationSuppliersHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\UpdateCombinationSuppliersHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $container->load('getCombinationRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductSupplierRepository'] ?? $container->load('getProductSupplierRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductSupplierUpdater'] ?? $container->load('getProductSupplierUpdaterService')));
    }
}
