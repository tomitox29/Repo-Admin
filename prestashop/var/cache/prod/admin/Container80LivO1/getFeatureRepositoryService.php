<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFeatureRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureRepository'] = new \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Validate\\FeatureValidator'] ??= new \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValidator()));
    }
}
