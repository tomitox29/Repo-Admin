<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Module_LinkBlock_Grid_DataFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.module.link_block.grid.data_factory' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.module.link_block.grid.data_factory'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(($container->services['prestashop.module.link_block.grid.query_builder'] ?? $container->load('getPrestashop_Module_LinkBlock_Grid_QueryBuilderService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.core.grid.query.doctrine_query_parser'] ??= new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser()), 'link_block');
    }
}