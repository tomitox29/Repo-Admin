<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_GViGITgService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.GViGITg' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.GViGITg'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\CommandHandler\\AddSpecificPriceHandler'] ?? $container->load('getAddSpecificPriceHandlerService'))->handle(...), ['method' => 'handle']);
    }
}