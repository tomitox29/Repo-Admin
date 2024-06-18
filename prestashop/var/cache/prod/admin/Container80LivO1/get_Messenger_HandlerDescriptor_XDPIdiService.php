<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XDPIdiService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.x_DPIdi' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.x_DPIdi'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.store.command_handler.bulk_delete_store_handler'] ?? $container->load('getPrestashop_Adapter_Store_CommandHandler_BulkDeleteStoreHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
