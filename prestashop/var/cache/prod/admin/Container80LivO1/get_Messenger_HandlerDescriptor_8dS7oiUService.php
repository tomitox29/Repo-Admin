<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_8dS7oiUService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.8dS7oiU' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.8dS7oiU'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order.command_handler.add_order_from_back_office_handler'] ?? $container->load('getPrestashop_Adapter_Order_CommandHandler_AddOrderFromBackOfficeHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
