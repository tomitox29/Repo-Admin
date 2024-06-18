<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_HHEVEBkService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.HHEVEBk' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.HHEVEBk'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.category.command_handler.bulk_update_categories_status_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\BulkUpdateCategoriesStatusHandler())->handle(...), ['method' => 'handle']);
    }
}
