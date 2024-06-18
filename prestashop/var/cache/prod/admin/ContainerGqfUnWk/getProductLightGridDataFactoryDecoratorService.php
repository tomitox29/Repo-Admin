<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductLightGridDataFactoryDecoratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Grid\Data\Factory\ProductLightGridDataFactoryDecorator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Grid\Data\Factory\ProductLightGridDataFactoryDecorator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Grid\\Data\\Factory\\ProductLightGridDataFactoryDecorator'] = new \PrestaShop\PrestaShop\Adapter\Product\Grid\Data\Factory\ProductLightGridDataFactoryDecorator(($container->services['prestashop.core.grid.data.factory.product'] ?? $container->load('getPrestashop_Core_Grid_Data_Factory_ProductService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] ?? self::getRepositoryService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->getLocale(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_CURRENCY_DEFAULT"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_STOCK_MANAGEMENT"));
    }
}
