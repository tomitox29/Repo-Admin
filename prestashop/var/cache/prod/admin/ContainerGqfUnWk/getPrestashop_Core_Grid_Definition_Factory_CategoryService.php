<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Definition_Factory_CategoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.definition.factory.category' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CategoryGridDefinitionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.core.grid.definition.factory.category'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CategoryGridDefinitionFactory(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['prestashop.adapter.grid.action.row.accessibility_checker.category_for_view'] ?? $container->load('getPrestashop_Adapter_Grid_Action_Row_AccessibilityChecker_CategoryForViewService')));

        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));

        return $instance;
    }
}
