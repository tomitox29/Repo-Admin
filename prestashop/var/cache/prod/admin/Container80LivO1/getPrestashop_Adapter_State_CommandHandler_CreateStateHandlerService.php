<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_State_CommandHandler_CreateStateHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.state.command_handler.create_state_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\State\CommandHandler\AddStateHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.state.command_handler.create_state_handler'] = new \PrestaShop\PrestaShop\Adapter\State\CommandHandler\AddStateHandler();
    }
}
