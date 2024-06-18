<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_OqKz2RService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.oqKz2_R' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.oqKz2_R'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler\AddProductImageHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Uploader\\ProductImageUploader'] ?? $container->load('getProductImageUploaderService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $container->load('getProductImageRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Image\\ProductImageFileValidator'] ?? $container->load('getProductImageFileValidatorService'))))->handle(...), ['method' => 'handle']);
    }
}
