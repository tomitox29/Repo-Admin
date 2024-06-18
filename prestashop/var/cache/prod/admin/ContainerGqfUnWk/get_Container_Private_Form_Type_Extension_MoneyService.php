<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Form_Type_Extension_MoneyService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.form.type.extension.money' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Extension\CustomMoneyTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.form.type.extension.money'] = new \PrestaShopBundle\Form\Extension\CustomMoneyTypeExtension(($container->services['prestashop.core.localization.locale.context_locale'] ?? $container->load('getPrestashop_Core_Localization_Locale_ContextLocaleService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_CURRENCY_DEFAULT"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\Repository\\CurrencyRepository'] ??= new \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository()), ($container->privates['PrestaShop\\PrestaShop\\Core\\Localization\\Number\\LocaleNumberTransformer'] ?? $container->load('getLocaleNumberTransformerService')));
    }
}
