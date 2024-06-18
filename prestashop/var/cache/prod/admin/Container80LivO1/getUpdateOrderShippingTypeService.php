<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateOrderShippingTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Order\UpdateOrderShippingType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Order\UpdateOrderShippingType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\UpdateOrderShippingType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\UpdateOrderShippingType(($container->services['prestashop.adapter.form.choice.provider.carrier_for_order_choice_provider'] ??= new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CarrierForOrderChoiceProvider()));
    }
}
