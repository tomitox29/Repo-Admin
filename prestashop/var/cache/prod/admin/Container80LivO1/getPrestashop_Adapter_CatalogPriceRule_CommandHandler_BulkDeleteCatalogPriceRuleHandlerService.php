<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CatalogPriceRule_CommandHandler_BulkDeleteCatalogPriceRuleHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.catalog_price_rule.command_handler.bulk_delete_catalog_price_rule_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\CommandHandler\BulkDeleteCatalogPriceRuleHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.catalog_price_rule.command_handler.bulk_delete_catalog_price_rule_handler'] = new \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\CommandHandler\BulkDeleteCatalogPriceRuleHandler();
    }
}
