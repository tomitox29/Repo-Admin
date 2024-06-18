<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSpecificPricePriorityTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\Pricing\SpecificPricePriorityType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\Pricing\SpecificPricePriorityType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\SpecificPricePriorityType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Pricing\SpecificPricePriorityType(($container->services['.container.private.prestashop.core.form.choice_provider.specific_price_priority_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_SpecificPricePriorityChoiceProviderService')));
    }
}
