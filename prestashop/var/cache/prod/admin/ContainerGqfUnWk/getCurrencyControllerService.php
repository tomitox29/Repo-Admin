<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrencyControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\Improve\International\CurrencyController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\Improve\International\CurrencyController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController'] = $instance = new \PrestaShopBundle\Controller\Admin\Improve\International\CurrencyController();

        $instance->setContainer(($container->privates['.service_locator.JQQ__7t'] ?? $container->load('get_ServiceLocator_JQQ7tService'))->withContext('PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController', $container));

        return $instance;
    }
}
