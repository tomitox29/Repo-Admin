<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Import_ImporterService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.import.importer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Import\Importer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.import.importer'] = new \PrestaShop\PrestaShop\Core\Import\Importer(($container->services['prestashop.core.import.access_checker'] ?? $container->load('getPrestashop_Core_Import_AccessCheckerService')), ($container->services['prestashop.adapter.import.entity_deleter'] ?? $container->load('getPrestashop_Adapter_Import_EntityDeleterService')), ($container->services['prestashop.core.import.csv_file_reader'] ?? $container->load('getPrestashop_Core_Import_CsvFileReaderService')), ($container->services['prestashop.core.import.dir'] ?? $container->load('getPrestashop_Core_Import_DirService')), ($container->services['prestashop.core.configuration.ini_configuration'] ??= new \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration()));
    }
}