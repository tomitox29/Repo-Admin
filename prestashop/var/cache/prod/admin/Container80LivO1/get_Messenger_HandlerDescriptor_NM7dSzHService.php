<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_NM7dSzHService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.NM7dSzH' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.NM7dSzH'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.category.command_handler.add_category_handler'] ?? $container->load('getPrestashop_Adapter_Category_CommandHandler_AddCategoryHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
