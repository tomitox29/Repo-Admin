<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Search_Builder_ClassService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.search.builder.class' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Search\Builder\ClassFiltersBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.search.builder.class'] = new \PrestaShop\PrestaShop\Core\Search\Builder\ClassFiltersBuilder();
    }
}
