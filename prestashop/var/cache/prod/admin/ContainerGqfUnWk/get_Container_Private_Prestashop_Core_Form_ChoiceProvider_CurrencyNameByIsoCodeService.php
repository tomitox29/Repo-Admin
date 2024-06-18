<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Form_ChoiceProvider_CurrencyNameByIsoCodeService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.form.choice_provider.currency_name_by_iso_code' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyNameByIsoCodeChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.form.choice_provider.currency_name_by_iso_code'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyNameByIsoCodeChoiceProvider(($container->services['prestashop.core.localization.cldr.locale_repository'] ?? self::getPrestashop_Core_Localization_Cldr_LocaleRepositoryService($container))->getLocale(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->getLocale())->getAllCurrencies());
    }
}
