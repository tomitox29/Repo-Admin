<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_AF4Utz2Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.aF4Utz2' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.aF4Utz2'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.state.command_handler.toggle_state_status_handler'] ??= new \PrestaShop\PrestaShop\Adapter\State\CommandHandler\ToggleStateStatusHandler())->handle(...), ['method' => 'handle']);
    }
}