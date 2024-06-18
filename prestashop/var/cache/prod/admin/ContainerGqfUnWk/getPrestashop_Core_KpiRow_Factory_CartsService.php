<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_KpiRow_Factory_CartsService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.kpi_row.factory.carts' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.kpi_row.factory.carts'] = new \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory([($container->services['PrestaShop\\PrestaShop\\Adapter\\Kpi\\ConversionRateKpi'] ?? $container->load('getConversionRateKpiService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Kpi\\AbandonedCartKpi'] ?? $container->load('getAbandonedCartKpiService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Kpi\\AverageOrderValueKpi'] ?? $container->load('getAverageOrderValueKpiService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Kpi\\NetProfitPerVisitKpi'] ?? $container->load('getNetProfitPerVisitKpiService'))], ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), 'carts');
    }
}
