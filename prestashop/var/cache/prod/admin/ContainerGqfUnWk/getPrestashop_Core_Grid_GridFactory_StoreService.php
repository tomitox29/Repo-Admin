<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_GridFactory_StoreService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.grid_factory.store' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\GridFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.grid_factory.store'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Definition\\Factory\\StoreGridDefinitionFactory'] ?? $container->load('getStoreGridDefinitionFactoryService')), new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\StoreGridDataFactory(($container->services['prestashop.core.grid.data.factory.store'] ?? $container->load('getPrestashop_Core_Grid_Data_Factory_StoreService'))), ($container->services['prestashop.core.grid.filter.form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_FormFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}
