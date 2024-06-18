<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCombinationIdsHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationIdsHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationIdsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\QueryHandler\\GetCombinationIdsHandler'] = new \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationIdsHandler(($container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\ProductCombinationQueryBuilder'] ?? $container->load('getProductCombinationQueryBuilderService')));
    }
}
