<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Supplier_CommandHandler_AddSupplierHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.supplier.command_handler.add_supplier_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\AddSupplierHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.supplier.command_handler.add_supplier_handler'] = new \PrestaShop\PrestaShop\Adapter\Supplier\CommandHandler\AddSupplierHandler();
    }
}
