<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_7FeKNuService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.7FeK_Nu' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.7FeK_Nu'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order_state.command_handler.edit_order_state_handler'] ?? $container->load('getPrestashop_Adapter_OrderState_CommandHandler_EditOrderStateHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
