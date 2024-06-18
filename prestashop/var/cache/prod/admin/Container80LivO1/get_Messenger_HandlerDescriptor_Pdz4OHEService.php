<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Pdz4OHEService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.pdz4OHE' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.pdz4OHE'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\DeleteProductHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\ProductDeleter'] ?? $container->load('getProductDeleterService'))))->handle(...), ['method' => 'handle']);
    }
}
