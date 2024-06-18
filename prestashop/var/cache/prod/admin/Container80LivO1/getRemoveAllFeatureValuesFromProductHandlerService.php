<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveAllFeatureValuesFromProductHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler\RemoveAllFeatureValuesFromProductHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler\RemoveAllFeatureValuesFromProductHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\CommandHandler\\RemoveAllFeatureValuesFromProductHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler\RemoveAllFeatureValuesFromProductHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\Update\\ProductFeatureValueUpdater'] ?? $container->load('getProductFeatureValueUpdaterService')));
    }
}
