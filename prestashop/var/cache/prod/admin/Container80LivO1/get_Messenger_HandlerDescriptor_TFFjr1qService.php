<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_TFFjr1qService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.TFFjr1q' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.TFFjr1q'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Supplier\\CommandHandler\\SetSuppliersHandler'] ?? $container->load('getSetSuppliersHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
