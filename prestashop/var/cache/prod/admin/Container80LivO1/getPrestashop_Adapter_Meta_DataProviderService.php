<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Meta_DataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.meta.data_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.meta.data_provider'] = new \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider();
    }
}