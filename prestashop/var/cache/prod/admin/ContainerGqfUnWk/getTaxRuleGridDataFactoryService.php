<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxRuleGridDataFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Grid\Data\Factory\TaxRuleGridDataFactory' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\Factory\TaxRuleGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Data\\Factory\\TaxRuleGridDataFactory'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\TaxRuleGridDataFactory(($container->services['prestashop.core.grid.data.factory.tax_rule'] ?? $container->load('getPrestashop_Core_Grid_Data_Factory_TaxRuleService')), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
