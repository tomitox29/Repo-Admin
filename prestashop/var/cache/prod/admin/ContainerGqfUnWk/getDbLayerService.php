<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDbLayerService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Core\FeatureFlag\Layer\DbLayer' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\FeatureFlag\Layer\DbLayer
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['PrestaShop\\PrestaShop\\Core\\FeatureFlag\\Layer\\DbLayer'] = $container->createProxy('DbLayerGhostC9a0ed3', static fn () => \DbLayerGhostC9a0ed3::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        return ($lazyLoad->__construct(($container->privates['PrestaShopBundle\\Entity\\Repository\\FeatureFlagRepository'] ?? self::getFeatureFlagRepositoryService($container))) && false ?: $lazyLoad);
    }
}
