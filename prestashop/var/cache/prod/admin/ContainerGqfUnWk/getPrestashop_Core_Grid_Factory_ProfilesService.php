<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Factory_ProfilesService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.factory.profiles' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\GridFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.factory.profiles'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($container->services['prestashop.core.grid.definition.factory.profile'] ?? $container->load('getPrestashop_Core_Grid_Definition_Factory_ProfileService')), new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\ProfileGridDataFactoryDecorator(($container->services['prestashop.core.grid.data_factory.profiles'] ?? $container->load('getPrestashop_Core_Grid_DataFactory_ProfilesService')), ($container->privates['security.helper'] ?? self::getSecurity_HelperService($container))), ($container->services['prestashop.core.grid.filter.form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_FormFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}
