<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_WW3y4OVService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.wW3y4OV' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.wW3y4OV'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.core.domain.customer_service.command_handler.bulk_delete_customer_thread_handler'] ?? $container->load('getPrestashop_Core_Domain_CustomerService_CommandHandler_BulkDeleteCustomerThreadHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
