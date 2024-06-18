<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Image\ImageValidator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Image\ImageValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Image\\ImageValidator'] = new \PrestaShop\PrestaShop\Adapter\Image\ImageValidator(($container->services['prestashop.core.configuration.upload_size_configuration'] ?? $container->load('getPrestashop_Core_Configuration_UploadSizeConfigurationService'))->getMaxUploadSizeInBytes());
    }
}