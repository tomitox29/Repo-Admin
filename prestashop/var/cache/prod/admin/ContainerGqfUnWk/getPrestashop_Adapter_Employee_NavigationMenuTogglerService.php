<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Employee_NavigationMenuTogglerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.employee.navigation_menu_toggler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Employee\NavigationMenuToggler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.employee.navigation_menu_toggler'] = new \PrestaShop\PrestaShop\Adapter\Employee\NavigationMenuToggler(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)));
    }
}
