<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IfQ3zSService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor._IfQ3zS' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor._IfQ3zS'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\CommandHandler\\DeleteCombinationHandler'] ?? $container->load('getDeleteCombinationHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
