<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Data_Factory_ManufacturerDecoratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.data.factory.manufacturer_decorator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\Factory\ManufacturerGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.data.factory.manufacturer_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\ManufacturerGridDataFactory(($container->services['prestashop.core.grid.data.factory.manufacturer'] ?? $container->load('getPrestashop_Core_Grid_Data_Factory_ManufacturerService')), ($container->services['prestashop.adapter.manufacturer.manufacturer_logo_thumbnail_provider'] ?? $container->load('getPrestashop_Adapter_Manufacturer_ManufacturerLogoThumbnailProviderService')));
    }
}
