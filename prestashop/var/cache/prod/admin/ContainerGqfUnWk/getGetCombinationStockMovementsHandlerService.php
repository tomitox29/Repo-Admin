<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCombinationStockMovementsHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler\GetCombinationStockMovementsHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler\GetCombinationStockMovementsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\QueryHandler\\GetCombinationStockMovementsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler\GetCombinationStockMovementsHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockAvailableRepository'] ?? $container->load('getStockAvailableRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockMovementRepository'] ?? $container->load('getStockMovementRepositoryService')), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
