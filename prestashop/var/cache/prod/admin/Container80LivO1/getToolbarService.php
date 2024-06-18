<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getToolbarService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Twig\Component\Toolbar' autowired service.
     *
     * @return \PrestaShopBundle\Twig\Component\Toolbar
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\Toolbar'] = function ($container) {
            return new \PrestaShopBundle\Twig\Component\Toolbar(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->privates['PrestaShopBundle\\Twig\\Layout\\MenuBuilder'] ?? $container->load('getMenuBuilderService')));
        };

        return $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\Toolbar']($container);
    }
}
