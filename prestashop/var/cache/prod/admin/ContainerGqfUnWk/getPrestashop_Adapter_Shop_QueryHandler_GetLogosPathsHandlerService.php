<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Shop_QueryHandler_GetLogosPathsHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.shop.query_handler.get_logos_paths_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Shop\QueryHandler\GetLogosPathsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.shop.query_handler.get_logos_paths_handler'] = new \PrestaShop\PrestaShop\Adapter\Shop\QueryHandler\GetLogosPathsHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("_PS_IMG_"), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("_PS_IMG_DIR_"));
    }
}
