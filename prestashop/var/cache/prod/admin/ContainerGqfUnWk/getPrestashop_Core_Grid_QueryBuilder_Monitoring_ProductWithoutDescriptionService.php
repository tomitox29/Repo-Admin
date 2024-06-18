<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_QueryBuilder_Monitoring_ProductWithoutDescriptionService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.query_builder.monitoring.product_without_description' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Query\Monitoring\ProductWithoutDescriptionQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.query_builder.monitoring.product_without_description'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Monitoring\ProductWithoutDescriptionQueryBuilder(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id, ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id, ($container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\DoctrineSearchCriteriaApplicatorInterface'] ??= new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator()), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)));
    }
}
