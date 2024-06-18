<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_NiPmVP3Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.niPmVP3' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.niPmVP3'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.customer.command_handler.bulk_enable_customer_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\BulkEnableCustomerHandler())->handle(...), ['method' => 'handle']);
    }
}
