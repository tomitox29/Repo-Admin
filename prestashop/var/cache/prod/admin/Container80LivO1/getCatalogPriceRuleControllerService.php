<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPriceRuleControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\Sell\Catalog\CatalogPriceRuleController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\Sell\Catalog\CatalogPriceRuleController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController'] = $instance = new \PrestaShopBundle\Controller\Admin\Sell\Catalog\CatalogPriceRuleController();

        $instance->setContainer(($container->privates['.service_locator.JQQ__7t'] ?? $container->load('get_ServiceLocator_JQQ7tService'))->withContext('PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController', $container));

        return $instance;
    }
}
