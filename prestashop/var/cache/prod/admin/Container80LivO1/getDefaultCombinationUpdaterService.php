<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultCombinationUpdaterService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\DefaultCombinationUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $container->load('getCombinationRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')));
    }
}