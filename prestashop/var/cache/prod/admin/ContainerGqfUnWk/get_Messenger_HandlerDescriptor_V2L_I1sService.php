<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_V2L_I1sService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.V2L.I1s' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.V2L.I1s'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.language.command_handler.delete_language_handler'] ?? $container->load('getPrestashop_Adapter_Language_CommandHandler_DeleteLanguageHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
