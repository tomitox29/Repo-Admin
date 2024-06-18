<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Form_ChoiceProvider_OrderCountriesService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.form.choice_provider.order_countries' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\OrderCountriesChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.form.choice_provider.order_countries'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\OrderCountriesChoiceProvider();
    }
}