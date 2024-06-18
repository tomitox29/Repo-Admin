<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\LoginController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\LoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\LoginController'] = $instance = new \PrestaShopBundle\Controller\Admin\LoginController(($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\ShopContext'] ?? $container->load('getShopContextService')), \dirname(__DIR__, 5), 'admin');

        $instance->setContainer(($container->privates['.service_locator.WuM.5MR'] ?? $container->load('get_ServiceLocator_WuM_5MRService'))->withContext('PrestaShopBundle\\Controller\\Admin\\LoginController', $container));

        return $instance;
    }
}
