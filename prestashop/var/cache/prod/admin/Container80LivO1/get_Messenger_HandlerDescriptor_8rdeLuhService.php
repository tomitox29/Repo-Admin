<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_8rdeLuhService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.8rdeLuh' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.8rdeLuh'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order_return.query_handler.get_order_return_for_editing_handler'] ?? $container->load('getPrestashop_Adapter_OrderReturn_QueryHandler_GetOrderReturnForEditingHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
