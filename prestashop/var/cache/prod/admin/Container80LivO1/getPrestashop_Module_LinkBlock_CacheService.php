<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Module_LinkBlock_CacheService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.module.link_block.cache' shared service.
     *
     * @return \PrestaShop\Module\LinkList\Cache\LegacyLinkBlockCache
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.module.link_block.cache'] = new \PrestaShop\Module\LinkList\Cache\LegacyLinkBlockCache();
    }
}
