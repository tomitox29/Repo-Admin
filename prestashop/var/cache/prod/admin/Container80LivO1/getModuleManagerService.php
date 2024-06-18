<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModuleManagerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Module\ModuleManager' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\ModuleManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository'] ?? $container->load('getModuleRepositoryService'));

        if (isset($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'])) {
            return $container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'];
        }
        $b = ($container->services['prestashop.core.admin.data_provider.module_interface'] ?? $container->load('getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService'));

        if (isset($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'])) {
            return $container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'])) {
            return $container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'];
        }

        return $container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'] = new \PrestaShop\PrestaShop\Core\Module\ModuleManager($a, ($container->services['prestashop.adapter.data_provider.module'] ?? $container->load('getPrestashop_Adapter_DataProvider_ModuleService')), $b, ($container->services['PrestaShop\\PrestaShop\\Core\\Module\\SourceHandler\\SourceHandlerFactory'] ?? $container->load('getSourceHandlerFactoryService')), ($container->services['translator'] ?? self::getTranslatorService($container)), $c, ($container->services['PrestaShop\\PrestaShop\\Adapter\\HookManager'] ??= new \PrestaShop\PrestaShop\Adapter\HookManager()));
    }
}