<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_AfFqxSMService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.AfFqxSM' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.AfFqxSM'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.hook.command_handler.get_hook_status_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Hook\QueryHandler\GetHookStatusHandler())->handle(...), ['method' => 'handle']);
    }
}
