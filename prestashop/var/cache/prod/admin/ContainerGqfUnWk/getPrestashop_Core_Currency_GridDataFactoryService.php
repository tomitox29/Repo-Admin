<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Currency_GridDataFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.currency.grid_data_factory' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Currency\CurrencyGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.currency.grid_data_factory'] = new \PrestaShop\PrestaShop\Core\Currency\CurrencyGridDataFactory(($container->services['prestashop.core.grid.data_provider.currency'] ?? $container->load('getPrestashop_Core_Grid_DataProvider_CurrencyService')));
    }
}
