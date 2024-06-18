<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_SqlManager_CommandHandler_EditRequestSqlService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.sql_manager.command_handler.edit_request_sql' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler\EditSqlRequestHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.sql_manager.command_handler.edit_request_sql'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler\EditSqlRequestHandler(($container->services['prestashop.adapter.sql_manager.sql_query_validator'] ??= new \PrestaShop\PrestaShop\Adapter\SqlManager\SqlQueryValidator()), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
