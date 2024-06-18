<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_QCTbq6sService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.qCTbq6s' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.qCTbq6s'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order_message.command_handler.bulk_delete_order_message_handler'] ??= new \PrestaShop\PrestaShop\Adapter\OrderMessage\CommandHandler\BulkDeleteOrderMessageHandler())->handle(...), ['method' => 'handle']);
    }
}
