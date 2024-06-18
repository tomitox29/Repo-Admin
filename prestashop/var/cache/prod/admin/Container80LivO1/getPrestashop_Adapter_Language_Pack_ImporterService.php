<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Language_Pack_ImporterService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.language.pack.importer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Language\Pack\LanguagePackImporter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.language.pack.importer'] = new \PrestaShop\PrestaShop\Adapter\Language\Pack\LanguagePackImporter(($container->services['prestashop.adapter.language.language_pack_installer'] ?? $container->load('getPrestashop_Adapter_Language_LanguagePackInstallerService')), ($container->services['prestashop.core.cache.clearer.cache_clearer_chain'] ?? $container->load('getPrestashop_Core_Cache_Clearer_CacheClearerChainService')));
    }
}
