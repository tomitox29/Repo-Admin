<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Module_LinkBlock_Grid_QueryBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.module.link_block.grid.query_builder' shared service.
     *
     * @return \PrestaShop\Module\LinkList\Core\Grid\Query\LinkBlockQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.module.link_block.grid.query_builder'] = new \PrestaShop\Module\LinkList\Core\Grid\Query\LinkBlockQueryBuilder(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_');
    }
}
