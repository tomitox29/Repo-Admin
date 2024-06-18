<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Import_ExcelToCsvConverterService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.import.excel_to_csv_converter' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Converter\ExcelToCsvFileConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.import.excel_to_csv_converter'] = new \PrestaShop\PrestaShop\Adapter\Converter\ExcelToCsvFileConverter(($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), (($container->services['prestashop.core.import.dir'] ?? $container->load('getPrestashop_Core_Import_DirService'))->getDir() . "csvfromexcel/"));
    }
}
