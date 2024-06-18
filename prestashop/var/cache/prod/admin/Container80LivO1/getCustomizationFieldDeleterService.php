<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomizationFieldDeleterService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Update\\CustomizationFieldDeleter'] = new \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Repository\\CustomizationFieldRepository'] ?? $container->load('getCustomizationFieldRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')));
    }
}