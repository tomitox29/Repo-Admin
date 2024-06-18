<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XuIqpJMService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.xuIqpJM' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.xuIqpJM'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order.command_handler.add_payment_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AddPaymentHandler())->handle(...), ['method' => 'handle']);
    }
}
