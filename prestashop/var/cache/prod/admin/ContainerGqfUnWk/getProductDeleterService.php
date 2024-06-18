<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductDeleterService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\Product\ProductDeleter' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\ProductDeleter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\ProductDeleter'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDeleter(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $container->load('getCombinationRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $container->load('getProductImageRepositoryService')));
    }
}