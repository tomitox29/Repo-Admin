<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManufacturerAddressTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Address\ManufacturerAddressType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Address\ManufacturerAddressType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Address\\ManufacturerAddressType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Address\\ManufacturerAddressType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Address\\ManufacturerAddressType'] = new \PrestaShopBundle\Form\Admin\Sell\Address\ManufacturerAddressType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['prestashop.adapter.form.choice_provider.manufacturer_name_by_id'] ?? $container->load('getPrestashop_Adapter_Form_ChoiceProvider_ManufacturerNameByIdService'))->getChoices(), ($container->services['prestashop.adapter.form.choice_provider.country_state_by_id'] ??= new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CountryStateByIdChoiceProvider()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->country->id, $a);
    }
}
