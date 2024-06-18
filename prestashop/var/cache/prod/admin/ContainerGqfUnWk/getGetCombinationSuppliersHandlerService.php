<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCombinationSuppliersHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\GetCombinationSuppliersHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\GetCombinationSuppliersHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\QueryHandler\\GetCombinationSuppliersHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\GetCombinationSuppliersHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductSupplierRepository'] ?? $container->load('getProductSupplierRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $container->load('getCombinationRepositoryService')));
    }
}