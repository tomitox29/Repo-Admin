<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_J1OVTnOService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.J1OVTnO' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.J1OVTnO'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order.query_handler.get_order_products_for_viewing_handler'] ?? $container->load('getPrestashop_Adapter_Order_QueryHandler_GetOrderProductsForViewingHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
