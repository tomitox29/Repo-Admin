<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_BJ0_BtkService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.BJ0.Btk' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.BJ0.Btk'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Product\Stock\CommandHandler\UpdateProductStockAvailableHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Update\\ProductStockUpdater'] ?? $container->load('getProductStockUpdaterService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $container->load('getCombinationRepositoryService'))))->handle(...), ['method' => 'handle']);
    }
}