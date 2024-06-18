<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Currency_QueryHandler_GetCurrencyForEditingService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.currency.query_handler.get_currency_for_editing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\QueryHandler\GetCurrencyForEditingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.currency.query_handler.get_currency_for_editing'] = new \PrestaShop\PrestaShop\Adapter\Currency\QueryHandler\GetCurrencyForEditingHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id, ($container->services['prestashop.core.localization.currency.pattern_transformer'] ??= new \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer()));
    }
}