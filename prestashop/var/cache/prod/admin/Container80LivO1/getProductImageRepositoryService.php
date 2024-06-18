<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductImageRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Validate\\ProductImageValidator'] ??= new \PrestaShop\PrestaShop\Adapter\Product\Image\Validate\ProductImageValidator()));
    }
}