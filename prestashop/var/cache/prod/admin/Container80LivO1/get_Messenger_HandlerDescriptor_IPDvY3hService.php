<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IPDvY3hService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.IPDvY3h' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.IPDvY3h'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.command_handler.remove_product_from_cart_handler'] ?? $container->load('getPrestashop_Adapter_CommandHandler_RemoveProductFromCartHandlerService'))->handle(...), ['method' => 'handle']);
    }
}