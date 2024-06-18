<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_EHXhmfXService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.EHXhmfX' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.EHXhmfX'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order_return_state.command_handler.delete_order_return_state_handler'] ??= new \PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler\DeleteOrderReturnStateHandler())->handle(...), ['method' => 'handle']);
    }
}
