<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_ZhXGmzkService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.ZhXGmzk' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.ZhXGmzk'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.core.domain.theme.command_handler.enable_theme_handler'] ?? $container->load('getPrestashop_Core_Domain_Theme_CommandHandler_EnableThemeHandlerService'))->handle(...), ['method' => 'handle']);
    }
}