<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_D7EyjUiService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.d7EyjUi' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.d7EyjUi'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.security.command_handler.bulk_delete_customers_sessions_handler'] ?? $container->load('getPrestashop_Adapter_Security_CommandHandler_BulkDeleteCustomersSessionsHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
