<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerGroupsControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\Configure\ShopParameters\CustomerGroupsController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\Configure\ShopParameters\CustomerGroupsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerGroupsController'] = $instance = new \PrestaShopBundle\Controller\Admin\Configure\ShopParameters\CustomerGroupsController();

        $instance->setContainer(($container->privates['.service_locator.JQQ__7t'] ?? $container->load('get_ServiceLocator_JQQ7tService'))->withContext('PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerGroupsController', $container));

        return $instance;
    }
}
