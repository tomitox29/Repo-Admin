<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebugCommandService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Command\DebugCommand' shared service.
     *
     * @return \PrestaShopBundle\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShopBundle\\Command\\DebugCommand'] = new \PrestaShopBundle\Command\DebugCommand(($container->services['prestashop.core.command_bus'] ?? $container->load('getPrestashop_Core_CommandBusService')), ($container->services['prestashop.adapter.debug_mode'] ??= new \PrestaShop\PrestaShop\Adapter\Debug\DebugMode()));
    }
}
