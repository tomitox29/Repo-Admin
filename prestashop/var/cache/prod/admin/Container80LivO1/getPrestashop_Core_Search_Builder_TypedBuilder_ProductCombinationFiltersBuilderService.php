<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Search_Builder_TypedBuilder_ProductCombinationFiltersBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.search.builder.typed_builder.product_combination_filters_builder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\ProductCombinationFiltersBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.search.builder.typed_builder.product_combination_filters_builder'] = new \PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\ProductCombinationFiltersBuilder();
    }
}