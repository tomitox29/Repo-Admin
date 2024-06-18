<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCombinationPriceImpactTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationPriceImpactType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationPriceImpactType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationPriceImpactType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationPriceImpactType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? self::getCurrencyDataProviderService($container))->getDefaultCurrency(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_WEIGHT_UNIT"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_TAX"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_USE_ECOTAX"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getInt("PS_ECOTAX_TAX_RULES_GROUP_ID"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Tax\\TaxComputer'] ?? $container->load('getTaxComputerService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->country->id, ($container->services['prestashop.core.localization.locale.context_locale'] ?? $container->load('getPrestashop_Core_Localization_Locale_ContextLocaleService')));
    }
}
