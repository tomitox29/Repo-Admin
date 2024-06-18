<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxRulesGroupFormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\TaxRulesGroupFormDataProvider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\TaxRulesGroupFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataProvider\\TaxRulesGroupFormDataProvider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\TaxRulesGroupFormDataProvider(($container->services['prestashop.core.query_bus'] ?? $container->load('getPrestashop_Core_QueryBusService')));
    }
}