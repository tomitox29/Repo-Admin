<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XgyPQIZService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.xgyPQIZ' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.xgyPQIZ'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.core.domain.theme.command_handler.reset_theme_layouts_handler'] ?? $container->load('getPrestashop_Core_Domain_Theme_CommandHandler_ResetThemeLayoutsHandlerService'))->handle(...), ['method' => 'handle']);
    }
}