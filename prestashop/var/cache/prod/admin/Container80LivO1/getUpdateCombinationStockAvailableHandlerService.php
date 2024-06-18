<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateCombinationStockAvailableHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\UpdateCombinationStockAvailableHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\UpdateCombinationStockAvailableHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\CommandHandler\\UpdateCombinationStockAvailableHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\UpdateCombinationStockAvailableHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\CombinationStockUpdater'] ?? $container->load('getCombinationStockUpdaterService')));
    }
}