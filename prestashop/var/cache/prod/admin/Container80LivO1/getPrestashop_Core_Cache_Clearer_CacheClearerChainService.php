<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Cache_Clearer_CacheClearerChainService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.cache.clearer.cache_clearer_chain' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerChain
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.cache.clearer.cache_clearer_chain'] = new \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerChain(($container->services['PrestaShop\\PrestaShop\\Adapter\\Cache\\Clearer\\SymfonyCacheClearer'] ?? $container->load('getSymfonyCacheClearerService')), ($container->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] ??= new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer()), ($container->services['prestashop.adapter.cache.clearer.xml_cache_clearer'] ??= new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\XmlCacheClearer()), ($container->services['prestashop.adapter.cache.clearer.media_cache_clearer'] ??= new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\MediaCacheClearer()), ($container->services['prestashop.adapter.cache.clearer.class_index_cache_clearer'] ??= new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\ClassIndexCacheClearer()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Cache\\Clearer\\DoctrineCacheClearer'] ?? $container->load('getDoctrineCacheClearerService')));
    }
}
