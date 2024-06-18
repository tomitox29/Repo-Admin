<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_ZkW6gBgService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.ZkW6gBg' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.ZkW6gBg'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.currency.query_handler.get_reference_currency'] ?? $container->load('getPrestashop_Adapter_Currency_QueryHandler_GetReferenceCurrencyService'))->handle(...), ['method' => 'handle']);
    }
}
