<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Zone_CommandHandler_ToggleZoneStatusHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.zone.command_handler.toggle_zone_status_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Zone\CommandHandler\ToggleZoneStatusHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.zone.command_handler.toggle_zone_status_handler'] = new \PrestaShop\PrestaShop\Adapter\Zone\CommandHandler\ToggleZoneStatusHandler();
    }
}