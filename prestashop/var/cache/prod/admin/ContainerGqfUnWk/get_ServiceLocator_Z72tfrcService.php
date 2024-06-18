<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z72tfrcService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.Z72tfrc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z72tfrc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'customerAddressFilters' => ['privates', '.errored..service_locator.Z72tfrc.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerAddressFilters', NULL, 'Cannot autowire service ".service_locator.Z72tfrc": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerAddressFilters" but no such service exists.'],
            'customerBoughtProductFilters' => ['privates', '.errored..service_locator.Z72tfrc.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerBoughtProductFilters', NULL, 'Cannot autowire service ".service_locator.Z72tfrc": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerBoughtProductFilters" but no such service exists.'],
            'customerCartFilters' => ['privates', '.errored..service_locator.Z72tfrc.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerCartFilters', NULL, 'Cannot autowire service ".service_locator.Z72tfrc": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerCartFilters" but no such service exists.'],
            'customerDiscountFilters' => ['privates', '.errored..service_locator.Z72tfrc.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerDiscountFilters', NULL, 'Cannot autowire service ".service_locator.Z72tfrc": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerDiscountFilters" but no such service exists.'],
            'customerOrderFilters' => ['privates', '.errored..service_locator.Z72tfrc.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerOrderFilters', NULL, 'Cannot autowire service ".service_locator.Z72tfrc": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerOrderFilters" but no such service exists.'],
            'customerViewedProductFilters' => ['privates', '.errored..service_locator.Z72tfrc.PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerViewedProductFilters', NULL, 'Cannot autowire service ".service_locator.Z72tfrc": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerViewedProductFilters" but no such service exists.'],
        ], [
            'customerAddressFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerAddressFilters',
            'customerBoughtProductFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerBoughtProductFilters',
            'customerCartFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerCartFilters',
            'customerDiscountFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerDiscountFilters',
            'customerOrderFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerOrderFilters',
            'customerViewedProductFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CustomerViewedProductFilters',
        ]);
    }
}
