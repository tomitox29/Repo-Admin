<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Definition_Factory_Product_ShopsService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.definition.factory.product.shops' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ProductShopsGridDefinitionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.core.grid.definition.factory.product.shops'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ProductShopsGridDefinitionFactory(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Grid\\Action\\Row\\AccessibilityChecker\\ProductSingleShopAssociatedAccessibilityChecker'] ?? $container->load('getProductSingleShopAssociatedAccessibilityCheckerService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Grid\\Action\\Row\\AccessibilityChecker\\ProductMultipleShopsAssociatedAccessibilityChecker'] ?? $container->load('getProductMultipleShopsAssociatedAccessibilityCheckerService')));

        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));

        return $instance;
    }
}