<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_DatabaseService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Database
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.database'] = new \PrestaShop\PrestaShop\Adapter\Database();
    }
}