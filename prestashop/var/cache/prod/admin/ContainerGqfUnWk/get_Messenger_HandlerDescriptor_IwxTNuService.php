<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IwxTNuService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.iwx_tNu' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.iwx_tNu'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Attribute\CommandHandler\AddAttributeHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $container->load('getAttributeRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Validate\\AttributeValidator'] ?? $container->load('getAttributeValidatorService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\File\\Uploader\\AttributeFileUploader'] ??= new \PrestaShop\PrestaShop\Adapter\File\Uploader\AttributeFileUploader())))->handle(...), ['method' => 'handle']);
    }
}
