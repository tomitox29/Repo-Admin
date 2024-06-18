<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Form_ChoiceProvider_CountryByIsoCodeService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.form.choice_provider.country_by_iso_code' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CountryByIsoCodeChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.form.choice_provider.country_by_iso_code'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CountryByIsoCodeChoiceProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguage()->id, ($container->services['prestashop.adapter.data_provider.country'] ??= new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider()));
    }
}
