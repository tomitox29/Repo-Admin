<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_LegacyDbService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.legacy_db' shared service.
     *
     * @return \Db
     *
     * @deprecated Since PrestaShop\PrestaShop 8: The "prestashop.adapter.legacy_db" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('PrestaShop\\PrestaShop', '8', 'The "prestashop.adapter.legacy_db" service is deprecated. You should stop using it, as it will be removed in the future.');

        return $container->services['prestashop.adapter.legacy_db'] = \Db::getInstance();
    }
}