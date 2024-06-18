<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Adapter_Form_ChoiceProvider_FeaturesChoiceProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.adapter.form.choice_provider.features_choice_provider' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\FeaturesChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.adapter.form.choice_provider.features_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\FeaturesChoiceProvider(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureRepository'] ?? $container->load('getFeatureRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
