<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModuleQueryBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\Module\APIResources\List\ModuleQueryBuilder' shared autowired service.
     *
     * @return \PrestaShop\Module\APIResources\List\ModuleQueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\Module\\APIResources\\List\\ModuleQueryBuilder'] = new \PrestaShop\Module\APIResources\List\ModuleQueryBuilder(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\DoctrineSearchCriteriaApplicatorInterface'] ??= new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator()));
    }
}