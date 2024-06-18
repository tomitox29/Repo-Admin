<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Search_Builder_TypedService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.search.builder.typed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Search\Builder\TypedFiltersBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.search.builder.typed'] = new \PrestaShop\PrestaShop\Core\Search\Builder\TypedFiltersBuilder(($container->services['prestashop.core.search.builder.class'] ??= new \PrestaShop\PrestaShop\Core\Search\Builder\ClassFiltersBuilder()), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['prestashop.core.search.builder.typed_builder.product_combination_filters_builder'] ??= new \PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\ProductCombinationFiltersBuilder());
            yield 1 => ($container->services['PrestaShop\\PrestaShop\\Core\\Search\\Builder\\TypedBuilder\\FeatureValueFiltersBuilder'] ?? $container->load('getFeatureValueFiltersBuilderService'));
        }, 2));
    }
}