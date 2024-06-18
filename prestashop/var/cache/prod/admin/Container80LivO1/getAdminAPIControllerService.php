<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminAPIControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters\AdminAPIController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters\AdminAPIController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdminAPIController'] = $instance = new \PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters\AdminAPIController(($container->services['PrestaShop\\PrestaShop\\Core\\FeatureFlag\\FeatureFlagStateCheckerInterface'] ?? self::getFeatureFlagStateCheckerInterfaceService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)));

        $instance->setContainer(($container->privates['.service_locator.JQQ__7t'] ?? $container->load('get_ServiceLocator_JQQ7tService'))->withContext('PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdminAPIController', $container));

        return $instance;
    }
}
