<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_QIFzwwService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.q_IFzww' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.q_IFzww'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.search_engine.command_handler.edit_search_engine_handler'] ??= new \PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler\EditSearchEngineHandler())->handle(...), ['method' => 'handle']);
    }
}
