<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_BLx6BDQService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.bLx6BDQ' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.bLx6BDQ'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.customer.command_handler.edit_customer_handler'] ?? $container->load('getPrestashop_Adapter_Customer_CommandHandler_EditCustomerHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
