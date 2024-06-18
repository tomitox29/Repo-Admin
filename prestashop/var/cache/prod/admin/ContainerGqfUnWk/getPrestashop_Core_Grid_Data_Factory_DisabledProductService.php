<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Data_Factory_DisabledProductService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.data.factory.disabled_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.data.factory.disabled_product'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(($container->services['prestashop.core.grid.query_builder.monitoring.disabled_product'] ?? $container->load('getPrestashop_Core_Grid_QueryBuilder_Monitoring_DisabledProductService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.core.grid.query.doctrine_query_parser'] ??= new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser()), 'disabled_product');
    }
}
