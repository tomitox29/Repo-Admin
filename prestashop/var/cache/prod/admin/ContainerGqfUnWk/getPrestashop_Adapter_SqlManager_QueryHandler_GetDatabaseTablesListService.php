<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_SqlManager_QueryHandler_GetDatabaseTablesListService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.sql_manager.query_handler.get_database_tables_list' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\SqlManager\QueryHandler\GetDatabaseTablesListHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.sql_manager.query_handler.get_database_tables_list'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\QueryHandler\GetDatabaseTablesListHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}