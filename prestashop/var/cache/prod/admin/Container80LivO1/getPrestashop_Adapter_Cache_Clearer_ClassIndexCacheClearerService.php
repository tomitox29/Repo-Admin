<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Cache_Clearer_ClassIndexCacheClearerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cache.clearer.class_index_cache_clearer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Cache\Clearer\ClassIndexCacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cache.clearer.class_index_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\ClassIndexCacheClearer();
    }
}
