<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Tax_CommandHandler_AddTaxHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.tax.command_handler.add_tax_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tax\CommandHandler\AddTaxHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.tax.command_handler.add_tax_handler'] = new \PrestaShop\PrestaShop\Adapter\Tax\CommandHandler\AddTaxHandler();
    }
}