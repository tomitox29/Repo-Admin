<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_GAQNPJjService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.GAQNPJj' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.GAQNPJj'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order.command_handler.delete_product_from_order_handler'] ?? $container->load('getPrestashop_Adapter_Order_CommandHandler_DeleteProductFromOrderHandlerService'))->handle(...), ['method' => 'handle']);
    }
}