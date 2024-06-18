<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Factory_Customer_ViewedProductService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.factory.customer.viewed_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\GridFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.factory.customer.viewed_product'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($container->services['prestashop.core.grid.definition.factory.customer.viewed_product'] ?? $container->load('getPrestashop_Core_Grid_Definition_Factory_Customer_ViewedProductService')), ($container->services['prestashop.core.grid.data_provider.customer_viewed_product'] ?? $container->load('getPrestashop_Core_Grid_DataProvider_CustomerViewedProductService')), ($container->services['prestashop.core.grid.filter.form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_FormFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}
