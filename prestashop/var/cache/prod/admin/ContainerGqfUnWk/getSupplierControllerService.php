<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSupplierControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\Sell\Catalog\SupplierController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\Sell\Catalog\SupplierController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController'] = $instance = new \PrestaShopBundle\Controller\Admin\Sell\Catalog\SupplierController();

        $instance->setContainer(($container->privates['.service_locator.JQQ__7t'] ?? $container->load('get_ServiceLocator_JQQ7tService'))->withContext('PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController', $container));

        return $instance;
    }
}
