<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPreferencesController2Service extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\Improve\Shipping\PreferencesController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\Improve\Shipping\PreferencesController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController'] = $instance = new \PrestaShopBundle\Controller\Admin\Improve\Shipping\PreferencesController();

        $instance->setContainer(($container->privates['.service_locator.JQQ__7t'] ?? $container->load('get_ServiceLocator_JQQ7tService'))->withContext('PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController', $container));

        return $instance;
    }
}
