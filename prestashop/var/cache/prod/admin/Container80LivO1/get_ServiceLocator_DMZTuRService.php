<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DMZTuRService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator._DMZTuR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._DMZTuR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator._DMZTuR.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\AttributeFilters', NULL, 'Cannot autowire service ".service_locator._DMZTuR": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\AttributeFilters" but no such service exists.'],
        ], [
            'filters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\AttributeFilters',
        ]);
    }
}
