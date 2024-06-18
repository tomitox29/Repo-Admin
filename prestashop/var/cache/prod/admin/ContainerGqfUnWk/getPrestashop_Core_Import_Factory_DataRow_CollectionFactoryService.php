<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Import_Factory_DataRow_CollectionFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.import.factory.data_row.collection_factory' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Import\File\DataRow\Factory\DataRowCollectionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.import.factory.data_row.collection_factory'] = new \PrestaShop\PrestaShop\Core\Import\File\DataRow\Factory\DataRowCollectionFactory(($container->services['prestashop.core.import.csv_file_reader'] ?? $container->load('getPrestashop_Core_Import_CsvFileReaderService')));
    }
}
