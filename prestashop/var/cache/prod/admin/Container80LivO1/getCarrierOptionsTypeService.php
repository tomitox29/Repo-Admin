<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarrierOptionsTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Improve\Shipping\Preferences\CarrierOptionsType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\Shipping\Preferences\CarrierOptionsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Improve\\Shipping\\Preferences\\CarrierOptionsType'] = new \PrestaShopBundle\Form\Admin\Improve\Shipping\Preferences\CarrierOptionsType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['prestashop.adapter.data_provider.carrier'] ?? $container->load('getPrestashop_Adapter_DataProvider_CarrierService'))->getActiveCarriersChoices(), ($container->services['prestashop.adapter.data_provider.carrier'] ?? $container->load('getPrestashop_Adapter_DataProvider_CarrierService'))->getOrderByChoices(), ($container->services['prestashop.adapter.data_provider.carrier'] ?? $container->load('getPrestashop_Adapter_DataProvider_CarrierService'))->getOrderWayChoices());
    }
}
