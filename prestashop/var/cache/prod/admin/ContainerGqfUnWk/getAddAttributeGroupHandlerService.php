<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddAttributeGroupHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler\AddAttributeGroupHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler\AddAttributeGroupHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\AttributeGroup\\CommandHandler\\AddAttributeGroupHandler'] = new \PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler\AddAttributeGroupHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\AttributeGroup\\Repository\\AttributeGroupRepository'] ?? $container->load('getAttributeGroupRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\AttributeGroup\\Validate\\AttributeGroupValidator'] ?? $container->load('getAttributeGroupValidatorService')));
    }
}