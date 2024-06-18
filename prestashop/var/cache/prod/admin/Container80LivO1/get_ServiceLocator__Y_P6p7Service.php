<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Y_P6p7Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator..y.p6p7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..y.p6p7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoryFilters' => ['privates', '.errored..service_locator..y.p6p7.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CmsPageCategoryFilters', NULL, 'Cannot autowire service ".service_locator..y.p6p7": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CmsPageCategoryFilters" but no such service exists.'],
            'cmsFilters' => ['privates', '.errored..service_locator..y.p6p7.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CmsPageFilters', NULL, 'Cannot autowire service ".service_locator..y.p6p7": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CmsPageFilters" but no such service exists.'],
        ], [
            'categoryFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CmsPageCategoryFilters',
            'cmsFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CmsPageFilters',
        ]);
    }
}
