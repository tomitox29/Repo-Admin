<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateMailTemplatesCommandService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Command\GenerateMailTemplatesCommand' shared service.
     *
     * @return \PrestaShopBundle\Command\GenerateMailTemplatesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShopBundle\\Command\\GenerateMailTemplatesCommand'] = new \PrestaShopBundle\Command\GenerateMailTemplatesCommand(($container->services['prestashop.core.command_bus'] ?? $container->load('getPrestashop_Core_CommandBusService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)));
    }
}
