<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Backup_OptionsConfigurationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.backup.options_configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Backup\Configuration\BackupOptionsConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.backup.options_configuration'] = new \PrestaShop\PrestaShop\Core\Backup\Configuration\BackupOptionsConfiguration(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
