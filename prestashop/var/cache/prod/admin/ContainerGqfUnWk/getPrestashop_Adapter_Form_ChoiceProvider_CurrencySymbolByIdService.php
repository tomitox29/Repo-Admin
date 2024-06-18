<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Form_ChoiceProvider_CurrencySymbolByIdService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.form.choice_provider.currency_symbol_by_id' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CurrencySymbolByIdChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.form.choice_provider.currency_symbol_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CurrencySymbolByIdChoiceProvider();
    }
}
