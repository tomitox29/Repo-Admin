<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteAttributeGroupHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler\DeleteAttributeGroupHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler\DeleteAttributeGroupHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\AttributeGroup\\CommandHandler\\DeleteAttributeGroupHandler'] = new \PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler\DeleteAttributeGroupHandler();
    }
}
