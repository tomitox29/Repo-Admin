<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([($container->services['prestashop.core.filter.front_end_object.search_result_product'] ??= new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter())]);

        return $instance;
    }
}
