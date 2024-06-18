<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeolocationOptionsTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationOptionsType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationOptionsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationOptionsType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationOptionsType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.prestashop.core.form.choice_provider.country_by_iso_code'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_CountryByIsoCodeService'))->getChoices(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
