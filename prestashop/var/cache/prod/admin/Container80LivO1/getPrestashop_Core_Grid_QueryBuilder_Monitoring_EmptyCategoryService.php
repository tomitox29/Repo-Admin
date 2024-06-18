<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_QueryBuilder_Monitoring_EmptyCategoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.query_builder.monitoring.empty_category' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Query\Monitoring\EmptyCategoryQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.query_builder.monitoring.empty_category'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Monitoring\EmptyCategoryQueryBuilder(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id, ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id, ($container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\DoctrineSearchCriteriaApplicatorInterface'] ??= new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator()), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_ROOT_CATEGORY"));
    }
}