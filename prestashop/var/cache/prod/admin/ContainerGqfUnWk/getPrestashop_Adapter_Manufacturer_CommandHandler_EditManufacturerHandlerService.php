<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Manufacturer_CommandHandler_EditManufacturerHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.manufacturer.command_handler.edit_manufacturer_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\EditManufacturerHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.manufacturer.command_handler.edit_manufacturer_handler'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\EditManufacturerHandler();
    }
}
