<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_KpiRow_Factory_CartService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.kpi_row.factory.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.kpi_row.factory.cart'] = new \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory([($container->services['prestashop.adapter.kpi.shopping_cart_total_kpi'] ?? $container->load('getPrestashop_Adapter_Kpi_ShoppingCartTotalKpiService'))], ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), 'cart');
    }
}
