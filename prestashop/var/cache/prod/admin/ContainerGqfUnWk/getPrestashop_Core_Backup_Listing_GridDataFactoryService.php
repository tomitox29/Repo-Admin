<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Backup_Listing_GridDataFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.backup.listing.grid_data_factory' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Backup\Listing\BackupGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.backup.listing.grid_data_factory'] = new \PrestaShop\PrestaShop\Core\Backup\Listing\BackupGridDataFactory(new \PrestaShop\PrestaShop\Adapter\Backup\BackupRepository(), ($container->services['prestashop.core.backup.comparator.backup_by_date_comparator'] ??= new \PrestaShop\PrestaShop\Core\Backup\Comparator\BackupByDateComparator()), ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguage()->date_format_full);
    }
}
