<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Api_QueryStockMovementParamsCollectionService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.api.query_stock_movement_params_collection' shared service.
     *
     * @return \PrestaShopBundle\Api\QueryStockMovementParamsCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.api.query_stock_movement_params_collection'] = new \PrestaShopBundle\Api\QueryStockMovementParamsCollection();
    }
}
