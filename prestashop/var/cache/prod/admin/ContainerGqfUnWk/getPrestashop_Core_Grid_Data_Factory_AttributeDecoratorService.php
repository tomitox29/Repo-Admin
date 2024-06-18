<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Data_Factory_AttributeDecoratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.data.factory.attribute_decorator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\Factory\AttributeGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.data.factory.attribute_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\AttributeGridDataFactory(($container->services['prestashop.core.grid.data.factory.attribute'] ?? $container->load('getPrestashop_Core_Grid_Data_Factory_AttributeService')), ($container->services['prestashop.adapter.shop.url.attribute_image_folder_provider'] ?? $container->load('getPrestashop_Adapter_Shop_Url_AttributeImageFolderProviderService')));
    }
}