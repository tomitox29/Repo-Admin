<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_P5Sw0NService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.p5Sw0_N' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.p5Sw0_N'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.currency.command_handler.delete_currency'] ?? $container->load('getPrestashop_Adapter_Currency_CommandHandler_DeleteCurrencyService'))->handle(...), ['method' => 'handle']);
    }
}