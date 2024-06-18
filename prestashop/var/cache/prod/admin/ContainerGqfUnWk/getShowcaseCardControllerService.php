<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShowcaseCardControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\Configure\ShowcaseCardController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\Configure\ShowcaseCardController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\Configure\\ShowcaseCardController'] = $instance = new \PrestaShopBundle\Controller\Admin\Configure\ShowcaseCardController();

        $instance->setContainer(($container->privates['.service_locator.JQQ__7t'] ?? $container->load('get_ServiceLocator_JQQ7tService'))->withContext('PrestaShopBundle\\Controller\\Admin\\Configure\\ShowcaseCardController', $container));

        return $instance;
    }
}
