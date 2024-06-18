<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_P1IvhlwService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.p1Ivhlw' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.p1Ivhlw'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.order_state.query_handler.get_order_state_for_editing'] ??= new \PrestaShop\PrestaShop\Adapter\OrderState\QueryHandler\GetOrderStateForEditingHandler())->handle(...), ['method' => 'handle']);
    }
}
