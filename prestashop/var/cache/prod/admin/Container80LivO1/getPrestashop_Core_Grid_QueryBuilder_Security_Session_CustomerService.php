<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_QueryBuilder_Security_Session_CustomerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.query_builder.security.session.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Query\Security\Session\CustomerQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.query_builder.security.session.customer'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Security\Session\CustomerQueryBuilder(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\DoctrineSearchCriteriaApplicatorInterface'] ??= new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id);
    }
}
