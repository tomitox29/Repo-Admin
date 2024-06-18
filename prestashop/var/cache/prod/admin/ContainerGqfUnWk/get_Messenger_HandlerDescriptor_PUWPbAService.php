<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_PUWPbAService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.PU_wPbA' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.PU_wPbA'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.manufacturer.command_handler.bulk_delete_manufacturer_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\BulkDeleteManufacturerHandler())->handle(...), ['method' => 'handle']);
    }
}
