<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockAvailableRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockAvailableRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Validate\\StockAvailableValidator'] ??= new \PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopGroupRepository'] ?? $container->load('getShopGroupRepositoryService')));
    }
}
