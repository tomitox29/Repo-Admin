<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zl1wgB1Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.Zl1wgB1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zl1wgB1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator.Zl1wgB1.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\MetaFilters', NULL, 'Cannot autowire service ".service_locator.Zl1wgB1": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\MetaFilters" but no such service exists.'],
        ], [
            'filters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\MetaFilters',
        ]);
    }
}
