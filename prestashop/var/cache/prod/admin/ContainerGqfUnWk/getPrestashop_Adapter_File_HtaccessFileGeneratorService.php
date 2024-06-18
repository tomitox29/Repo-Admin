<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_File_HtaccessFileGeneratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.file.htaccess_file_generator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\File\HtaccessFileGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.file.htaccess_file_generator'] = new \PrestaShop\PrestaShop\Adapter\File\HtaccessFileGenerator(($container->services['prestashop.core.cache.clearer.cache_clearer_chain'] ?? $container->load('getPrestashop_Core_Cache_Clearer_CacheClearerChainService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ??= new \PrestaShop\PrestaShop\Adapter\Tools()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_HTACCESS_DISABLE_MULTIVIEWS"));
    }
}
