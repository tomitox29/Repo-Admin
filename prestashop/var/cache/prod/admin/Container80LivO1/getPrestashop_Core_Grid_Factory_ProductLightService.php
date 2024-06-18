<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Factory_ProductLightService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.factory.product_light' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\GridFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.factory.product_light'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($container->services['prestashop.core.grid.definition.factory.product_light'] ?? $container->load('getPrestashop_Core_Grid_Definition_Factory_ProductLightService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Grid\\Data\\Factory\\ProductLightGridDataFactoryDecorator'] ?? $container->load('getProductLightGridDataFactoryDecoratorService')), ($container->services['prestashop.core.grid.filter.form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_FormFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}