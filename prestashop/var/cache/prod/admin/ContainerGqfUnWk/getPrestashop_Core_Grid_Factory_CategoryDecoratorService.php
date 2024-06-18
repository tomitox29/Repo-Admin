<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Factory_CategoryDecoratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.factory.category_decorator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Factory\CategoryGridFactoryDecorator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.factory.category_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Factory\CategoryGridFactoryDecorator(($container->services['prestashop.core.grid.factory.category'] ?? $container->load('getPrestashop_Core_Grid_Factory_CategoryService')), ($container->services['prestashop.core.grid.filter.category_form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_CategoryFormFactoryService')));
    }
}
