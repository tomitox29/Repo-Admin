<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_OrderState_QueryHandler_GetOrderStateForEditingService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order_state.query_handler.get_order_state_for_editing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\OrderState\QueryHandler\GetOrderStateForEditingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order_state.query_handler.get_order_state_for_editing'] = new \PrestaShop\PrestaShop\Adapter\OrderState\QueryHandler\GetOrderStateForEditingHandler();
    }
}
