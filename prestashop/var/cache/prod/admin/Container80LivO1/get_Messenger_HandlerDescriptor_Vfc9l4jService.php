<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Vfc9l4jService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.vfc9l4j' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.vfc9l4j'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\QueryHandler\\GetCombinationIdsHandler'] ?? $container->load('getGetCombinationIdsHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
