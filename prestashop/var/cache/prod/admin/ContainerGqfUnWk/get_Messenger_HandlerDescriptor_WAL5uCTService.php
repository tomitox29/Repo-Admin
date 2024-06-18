<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_WAL5uCTService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.wAL5uCT' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.wAL5uCT'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.cart.command_handler.update_cart_currency_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateCartCurrencyHandler())->handle(...), ['method' => 'handle']);
    }
}
