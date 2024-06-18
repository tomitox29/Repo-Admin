<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_MemcacheServer_ManagerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.memcache_server.manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.memcache_server.manager'] = new \PrestaShop\PrestaShop\Adapter\Cache\MemcacheServerManager(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_');
    }
}
