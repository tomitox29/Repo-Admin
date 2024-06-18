<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Domain_SqlManagement_QueryHandler_GetSqlRequestSettingsService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.domain.sql_management.query_handler.get_sql_request_settings' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler\GetSqlRequestSettingsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.domain.sql_management.query_handler.get_sql_request_settings'] = new \PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler\GetSqlRequestSettingsHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
