<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_QXeH3qFService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.qXeH3qF' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.qXeH3qF'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\QueryHandler\\GetSpecificPriceListHandler'] ?? $container->load('getGetSpecificPriceListHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
