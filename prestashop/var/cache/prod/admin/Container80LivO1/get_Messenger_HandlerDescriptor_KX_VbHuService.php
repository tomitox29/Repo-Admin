<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_KX_VbHuService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.kX.vbHu' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.kX.vbHu'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Product\QueryHandler\GetRelatedProductsHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $container->load('getProductImageRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\ProductImagePathFactory'] ?? $container->load('getProductImagePathFactoryService'))))->handle(...), ['method' => 'handle']);
    }
}
