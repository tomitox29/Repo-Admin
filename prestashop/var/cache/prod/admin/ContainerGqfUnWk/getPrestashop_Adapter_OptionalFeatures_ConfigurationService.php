<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_OptionalFeatures_ConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.optional_features.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\OptionalFeatures\OptionalFeaturesConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.optional_features.configuration'] = new \PrestaShop\PrestaShop\Adapter\OptionalFeatures\OptionalFeaturesConfiguration(($container->services['prestashop.adapter.combination_feature'] ?? $container->load('getPrestashop_Adapter_CombinationFeatureService')), ($container->services['prestashop.adapter.feature.feature'] ?? $container->load('getPrestashop_Adapter_Feature_FeatureService')), ($container->services['prestashop.adapter.group.feature'] ?? $container->load('getPrestashop_Adapter_Group_FeatureService')));
    }
}
