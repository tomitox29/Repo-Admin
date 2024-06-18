<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_SearchProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.search_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\SearchProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.translation.search_provider'] = new \PrestaShopBundle\Translation\Provider\SearchProvider(($container->services['prestashop.translation.database_loader'] ?? $container->load('getPrestashop_Translation_DatabaseLoaderService')), ($container->services['prestashop.translation.external_module_provider'] ?? $container->load('getPrestashop_Translation_ExternalModuleProviderService')), (\dirname(__DIR__, 5).'/translations'));
    }
}
