<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_OH1fd0dService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.oH1fd0d' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.oH1fd0d'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.address.command_handler.edit_cart_address_handler'] ?? $container->load('getPrestashop_Adapter_Address_CommandHandler_EditCartAddressHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
