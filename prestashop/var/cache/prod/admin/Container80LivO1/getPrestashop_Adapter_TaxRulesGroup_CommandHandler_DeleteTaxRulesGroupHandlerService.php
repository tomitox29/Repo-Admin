<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_TaxRulesGroup_CommandHandler_DeleteTaxRulesGroupHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.tax_rules_group.command_handler.delete_tax_rules_group_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler\DeleteTaxRulesGroupHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.tax_rules_group.command_handler.delete_tax_rules_group_handler'] = new \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler\DeleteTaxRulesGroupHandler();
    }
}