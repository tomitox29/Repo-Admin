<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDotEnvLayerService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Core\FeatureFlag\Layer\DotEnvLayer' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\FeatureFlag\Layer\DotEnvLayer
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['PrestaShop\\PrestaShop\\Core\\FeatureFlag\\Layer\\DotEnvLayer'] = $container->createProxy('DotEnvLayerGhostC7a9172', static fn () => \DotEnvLayerGhostC7a9172::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        return ($lazyLoad->__construct(($container->services['prestashop.adapter.environment'] ??= new \PrestaShop\PrestaShop\Adapter\Environment(false, 'prod', 'admin')), \dirname(__DIR__, 5)) && false ?: $lazyLoad);
    }
}