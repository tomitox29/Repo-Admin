<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFeatureValueValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Validate\\FeatureValueValidator'] = new \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator();
    }
}