<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_ExternalModuleProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.external_module_provider' shared service.
     *
     * @return \PrestaShopBundle\Translation\Provider\ExternalModuleLegacySystemProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.translation.external_module_provider'] = new \PrestaShopBundle\Translation\Provider\ExternalModuleLegacySystemProvider(($container->services['prestashop.translation.database_loader'] ?? $container->load('getPrestashop_Translation_DatabaseLoaderService')), (\dirname(__DIR__, 5).'/modules'), ($container->services['prestashop.translation.legacy_file_loader'] ?? $container->load('getPrestashop_Translation_LegacyFileLoaderService')), ($container->services['prestashop.translation.legacy_module.extractor'] ?? $container->load('getPrestashop_Translation_LegacyModule_ExtractorService')), ($container->services['prestashop.translation.module_provider'] ?? $container->load('getPrestashop_Translation_ModuleProviderService')));
    }
}
