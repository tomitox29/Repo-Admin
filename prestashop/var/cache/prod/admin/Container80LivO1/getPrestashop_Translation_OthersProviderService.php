<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_OthersProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.others_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\OthersProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.translation.others_provider'] = new \PrestaShopBundle\Translation\Provider\OthersProvider(($container->services['prestashop.translation.database_loader'] ?? $container->load('getPrestashop_Translation_DatabaseLoaderService')), (\dirname(__DIR__, 5).'/translations'));
    }
}