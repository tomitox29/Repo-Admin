<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_LogFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.log_factory' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\GridFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.log_factory'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($container->services['prestashop.core.grid.definition.factory.logs'] ?? $container->load('getPrestashop_Core_Grid_Definition_Factory_LogsService')), ($container->services['prestashop.core.grid.data.factory.log_decorator'] ?? $container->load('getPrestashop_Core_Grid_Data_Factory_LogDecoratorService')), ($container->services['prestashop.core.grid.filter.form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_FormFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}
