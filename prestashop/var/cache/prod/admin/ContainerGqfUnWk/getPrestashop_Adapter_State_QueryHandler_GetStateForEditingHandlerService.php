<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_State_QueryHandler_GetStateForEditingHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.state.query_handler.get_state_for_editing_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\State\QueryHandler\GetStateForEditingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.state.query_handler.get_state_for_editing_handler'] = new \PrestaShop\PrestaShop\Adapter\State\QueryHandler\GetStateForEditingHandler();
    }
}