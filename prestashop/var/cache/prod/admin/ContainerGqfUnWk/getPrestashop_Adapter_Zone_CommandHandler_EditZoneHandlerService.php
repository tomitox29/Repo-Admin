<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Zone_CommandHandler_EditZoneHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.zone.command_handler.edit_zone_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Zone\CommandHandler\EditZoneHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.zone.command_handler.edit_zone_handler'] = new \PrestaShop\PrestaShop\Adapter\Zone\CommandHandler\EditZoneHandler();
    }
}
