<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_9tgyrwKService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.9tgyrwK' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.9tgyrwK'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.search_engine.command_handler.delete_search_engine_handler'] ??= new \PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler\DeleteSearchEngineHandler())->handle(...), ['method' => 'handle']);
    }
}
