<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Form_ChoiceProvider_RiskByIdChoiceProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.form.choice_provider.risk_by_id_choice_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\RiskByIdChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.form.choice_provider.risk_by_id_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\RiskByIdChoiceProvider();
    }
}
