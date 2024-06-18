<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_QueryBuilder_RequestSqlService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.query_builder.request_sql' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Query\RequestSqlQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.query_builder.request_sql'] = new \PrestaShop\PrestaShop\Core\Grid\Query\RequestSqlQueryBuilder(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_');
    }
}
