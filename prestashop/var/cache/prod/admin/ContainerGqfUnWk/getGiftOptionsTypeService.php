<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGiftOptionsTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences\GiftOptionsType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences\GiftOptionsType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GiftOptionsType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GiftOptionsType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GiftOptionsType'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences\GiftOptionsType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? self::getCurrencyDataProviderService($container))->getDefaultCurrencyIsoCode(), ($container->services['.container.private.prestashop.core.form.choice_provider.tax_rule_group_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_TaxRuleGroupChoiceProviderService'))->getChoices(), $a);
    }
}