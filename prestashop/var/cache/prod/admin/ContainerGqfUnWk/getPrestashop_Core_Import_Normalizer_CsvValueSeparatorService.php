<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Import_Normalizer_CsvValueSeparatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.import.normalizer.csv_value_separator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Import\CsvValueSeparatorNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.import.normalizer.csv_value_separator'] = new \PrestaShop\PrestaShop\Core\Import\CsvValueSeparatorNormalizer();
    }
}
