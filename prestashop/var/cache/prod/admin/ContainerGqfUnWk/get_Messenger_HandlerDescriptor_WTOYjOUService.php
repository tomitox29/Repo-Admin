<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_WTOYjOUService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.wTOYjOU' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.wTOYjOU'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Product\AttributeGroup\QueryHandler\GetProductAttributeGroupsHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $container->load('getAttributeRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\AttributeGroup\\Repository\\AttributeGroupRepository'] ?? $container->load('getAttributeGroupRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService'))))->handle(...), ['method' => 'handle']);
    }
}
