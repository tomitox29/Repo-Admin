<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiClientQueryBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Grid\Query\ApiClientQueryBuilder' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Query\ApiClientQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\ApiClientQueryBuilder'] = new \PrestaShop\PrestaShop\Core\Grid\Query\ApiClientQueryBuilder(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\DoctrineSearchCriteriaApplicatorInterface'] ??= new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator()));
    }
}
