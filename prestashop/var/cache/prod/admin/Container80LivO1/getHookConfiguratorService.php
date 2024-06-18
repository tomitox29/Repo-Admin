<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHookConfiguratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'hook_configurator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\HookConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['hook_configurator'] = new \PrestaShop\PrestaShop\Core\Module\HookConfigurator(($container->services['hook_repository'] ?? $container->load('getHookRepositoryService')));
    }
}
