<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductImageProviderInterfaceService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider\ProductImageProviderInterface' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImageProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Image\\Provider\\ProductImageProviderInterface'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImageProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $container->load('getProductImageRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $container->load('getCombinationRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\ProductImagePathFactory'] ?? $container->load('getProductImagePathFactoryService')));
    }
}
