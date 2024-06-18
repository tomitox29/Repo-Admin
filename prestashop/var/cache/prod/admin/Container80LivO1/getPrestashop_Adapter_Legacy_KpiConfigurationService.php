<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Legacy_KpiConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.legacy.kpi_configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration\KpiConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.legacy.kpi_configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration\KpiConfiguration();
    }
}
