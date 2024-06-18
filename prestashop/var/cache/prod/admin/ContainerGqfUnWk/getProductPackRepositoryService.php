<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductPackRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Pack\\Repository\\ProductPackRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_');
    }
}
