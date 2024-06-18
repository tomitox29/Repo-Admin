<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchProductsHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\QueryHandler\SearchProductsHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\QueryHandler\SearchProductsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\QueryHandler\\SearchProductsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\QueryHandler\SearchProductsHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id, ($container->services['prestashop.core.localization.locale.context_locale'] ?? $container->load('getPrestashop_Core_Localization_Locale_ContextLocaleService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ??= new \PrestaShop\PrestaShop\Adapter\Tools()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? self::getCurrencyDataProviderService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] ?? self::getContextStateManagerService($container)));
    }
}
