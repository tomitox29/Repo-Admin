<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Manufacturer_CommandHandler_DeleteManufacturerLogoImageHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.manufacturer.command_handler.delete_manufacturer_logo_image_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\DeleteManufacturerLogoImageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.manufacturer.command_handler.delete_manufacturer_logo_image_handler'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\DeleteManufacturerLogoImageHandler((\dirname(__DIR__, 5).'/img/m/'), (\dirname(__DIR__, 5).'/img/tmp/'));
    }
}
