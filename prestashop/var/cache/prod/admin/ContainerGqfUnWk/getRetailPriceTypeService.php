<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRetailPriceTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\Pricing\RetailPriceType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\Pricing\RetailPriceType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\RetailPriceType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\RetailPriceType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\RetailPriceType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Pricing\RetailPriceType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['prestashop.core.localization.locale.context_locale'] ?? $container->load('getPrestashop_Core_Localization_Locale_ContextLocaleService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? self::getCurrencyDataProviderService($container))->getDefaultCurrency(), ($container->services['.container.private.prestashop.core.form.choice_provider.tax_rule_group_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_TaxRuleGroupChoiceProviderService')), $a, ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_TAX"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_USE_ECOTAX"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getInt("PS_ECOTAX_TAX_RULES_GROUP_ID"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Tax\\TaxComputer'] ?? $container->load('getTaxComputerService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->country->id);
    }
}