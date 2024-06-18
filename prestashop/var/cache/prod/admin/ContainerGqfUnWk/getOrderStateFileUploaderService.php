<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderStateFileUploaderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\File\Uploader\OrderStateFileUploader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\File\Uploader\OrderStateFileUploader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\File\\Uploader\\OrderStateFileUploader'] = new \PrestaShop\PrestaShop\Adapter\File\Uploader\OrderStateFileUploader(($container->services['prestashop.core.configuration.upload_size_configuration'] ?? $container->load('getPrestashop_Core_Configuration_UploadSizeConfigurationService')));
    }
}
