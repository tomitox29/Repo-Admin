<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_SqlManager_CommandHandler_BulkDeleteRequestSqlService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.sql_manager.command_handler.bulk_delete_request_sql' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler\BulkDeleteSqlRequestHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.sql_manager.command_handler.bulk_delete_request_sql'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler\BulkDeleteSqlRequestHandler();
    }
}
