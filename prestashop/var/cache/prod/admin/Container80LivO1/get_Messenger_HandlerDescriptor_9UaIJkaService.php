<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_9UaIJkaService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.9UaIJka' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.9UaIJka'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.address.command_handler.add_customer_address_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Address\CommandHandler\AddCustomerAddressHandler())->handle(...), ['method' => 'handle']);
    }
}
