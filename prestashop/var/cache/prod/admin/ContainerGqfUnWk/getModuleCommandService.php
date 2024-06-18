<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModuleCommandService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Command\ModuleCommand' shared service.
     *
     * @return \PrestaShopBundle\Command\ModuleCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShopBundle\\Command\\ModuleCommand'] = new \PrestaShopBundle\Command\ModuleCommand(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)), ($container->services['prestashop.adapter.module.self_configurator'] ?? $container->load('getPrestashop_Adapter_Module_SelfConfiguratorService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleManager'] ?? $container->load('getModuleManagerService')));
    }
}
