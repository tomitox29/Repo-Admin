<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Currency_QueryHandler_GetCurrencyExchangeRateService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.currency.query_handler.get_currency_exchange_rate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\QueryHandler\GetCurrencyExchangeRateHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.currency.query_handler.get_currency_exchange_rate'] = new \PrestaShop\PrestaShop\Adapter\Currency\QueryHandler\GetCurrencyExchangeRateHandler(($container->services['prestashop.core.exchange_rate.provider'] ?? $container->load('getPrestashop_Core_ExchangeRate_ProviderService')));
    }
}