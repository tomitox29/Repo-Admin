<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_KkMI7VService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.KkMI7_V' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.KkMI7_V'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Product\QueryHandler\GetProductSupplierOptionsHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductSupplierRepository'] ?? $container->load('getProductSupplierRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService'))))->handle(...), ['method' => 'handle']);
    }
}
