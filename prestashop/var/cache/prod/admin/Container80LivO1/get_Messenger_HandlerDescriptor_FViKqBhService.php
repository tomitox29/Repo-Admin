<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_FViKqBhService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.fViKqBh' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.fViKqBh'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Adapter\\Hook\\QueryHandler\\GetHookHandler'] ??= new \PrestaShop\PrestaShop\Adapter\Hook\QueryHandler\GetHookHandler())->handle(...), ['method' => 'handle']);
    }
}
