<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_9jcWikAService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.9jcWikA' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.9jcWikA'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\CommandHandler\\AddVirtualProductFileHandler'] ?? $container->load('getAddVirtualProductFileHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
