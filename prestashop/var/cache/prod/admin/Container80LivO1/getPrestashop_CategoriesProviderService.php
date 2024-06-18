<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_CategoriesProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.categories_provider' shared service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['prestashop.categories_provider'] = $container->createProxy('CategoriesProviderProxyD3c3032', static fn () => \CategoriesProviderProxyD3c3032::createLazyProxy(static fn () => self::do($container, false)));
        }

        return ($container->services['PrestaShop\\PrestaShop\\Adapter\\Category\\CategoriesProviderBuilder'] ?? $container->load('getCategoriesProviderBuilderService'))->build();
    }
}