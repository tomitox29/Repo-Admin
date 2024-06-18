<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_CircuitBreaker_DoctrineCacheService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\Psr6\DoctrineProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.circuit_breaker.doctrine_cache'] = \Doctrine\Common\Cache\Psr6\DoctrineProvider::wrap(($container->services['prestashop.core.circuit_breaker.cache'] ?? $container->load('getPrestashop_Core_CircuitBreaker_CacheService')));
    }
}
