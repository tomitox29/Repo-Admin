<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Attribute_PositionDefinitionService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.attribute.position_definition' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.attribute.position_definition'] = new \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition('attribute', 'id_attribute', 'position', 'id_attribute_group');
    }
}