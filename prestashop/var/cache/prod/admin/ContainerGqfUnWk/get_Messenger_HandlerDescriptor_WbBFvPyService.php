<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_WbBFvPyService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.WbBFvPy' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.WbBFvPy'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.language.command_handler.add_language_handler'] ?? $container->load('getPrestashop_Adapter_Language_CommandHandler_AddLanguageHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
