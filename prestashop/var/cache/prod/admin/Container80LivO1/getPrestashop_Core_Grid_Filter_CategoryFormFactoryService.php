<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Filter_CategoryFormFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.filter.category_form_factory' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Filter\CategoryFilterFormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.filter.category_form_factory'] = new \PrestaShop\PrestaShop\Core\Grid\Filter\CategoryFilterFormFactory(($container->services['prestashop.core.grid.filter.form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_FormFactoryService')), ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}