<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Em4JdOkService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.Em4JdOk' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.Em4JdOk'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.supplier.command_handler.add_supplier_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\AddSupplierHandler())->handle(...), ['method' => 'handle']);
    }
}