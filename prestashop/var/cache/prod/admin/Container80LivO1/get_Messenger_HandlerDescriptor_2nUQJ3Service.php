<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_2nUQJ3Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor._2nUQJ3' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor._2nUQJ3'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\QueryHandler\\GetCombinationStockMovementsHandler'] ?? $container->load('getGetCombinationStockMovementsHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
