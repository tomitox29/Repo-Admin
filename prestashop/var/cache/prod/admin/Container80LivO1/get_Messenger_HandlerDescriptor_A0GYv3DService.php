<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_A0GYv3DService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.A0GYv3D' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.A0GYv3D'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.customer.command_handler.bulk_delete_customer_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\BulkDeleteCustomerHandler())->handle(...), ['method' => 'handle']);
    }
}
