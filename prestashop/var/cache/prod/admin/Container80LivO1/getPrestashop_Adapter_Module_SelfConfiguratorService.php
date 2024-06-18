<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Module_SelfConfiguratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.module.self_configurator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleSelfConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['prestashop.adapter.module.self_configurator'] = $container->createProxy('ModuleSelfConfiguratorGhostC8ac64c', static fn () => \ModuleSelfConfiguratorGhostC8ac64c::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        return ($lazyLoad->__construct(($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository'] ?? $container->load('getModuleRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem())) && false ?: $lazyLoad);
    }
}
