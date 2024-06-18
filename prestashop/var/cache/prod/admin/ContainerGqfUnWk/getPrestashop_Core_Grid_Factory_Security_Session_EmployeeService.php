<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Factory_Security_Session_EmployeeService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.factory.security.session.employee' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\GridFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.factory.security.session.employee'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($container->services['prestashop.core.grid.definition.factory.security.session.employee'] ?? $container->load('getPrestashop_Core_Grid_Definition_Factory_Security_Session_EmployeeService')), ($container->services['prestashop.core.grid.data_factory.security.session.employee'] ?? $container->load('getPrestashop_Core_Grid_DataFactory_Security_Session_EmployeeService')), ($container->services['prestashop.core.grid.filter.form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_FormFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}
