<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Kpi_AverageProductsInCategoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.kpi.average_products_in_category' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Kpi\AverageProductsInCategoryKpi
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.kpi.average_products_in_category'] = new \PrestaShop\PrestaShop\Adapter\Kpi\AverageProductsInCategoryKpi(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['prestashop.adapter.legacy.kpi_configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration\KpiConfiguration()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getAdminLink("AdminStats", true, ["ajax" => 1, "action" => "getKpi", "kpi" => "products_per_category"]));
    }
}