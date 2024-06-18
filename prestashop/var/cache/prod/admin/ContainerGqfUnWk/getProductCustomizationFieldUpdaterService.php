<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCustomizationFieldUpdaterService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\Product\Customization\Update\ProductCustomizationFieldUpdater' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\ProductCustomizationFieldUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Update\\ProductCustomizationFieldUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\ProductCustomizationFieldUpdater(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Repository\\CustomizationFieldRepository'] ?? $container->load('getCustomizationFieldRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Update\\CustomizationFieldDeleter'] ?? $container->load('getCustomizationFieldDeleterService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')));
    }
}
