<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManufacturerType2Service extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\Description\ManufacturerType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\Description\ManufacturerType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Description\\ManufacturerType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Description\ManufacturerType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['prestashop.adapter.form.choice_provider.manufacturer_name_by_id'] ?? $container->load('getPrestashop_Adapter_Form_ChoiceProvider_ManufacturerNameByIdService')));
    }
}
