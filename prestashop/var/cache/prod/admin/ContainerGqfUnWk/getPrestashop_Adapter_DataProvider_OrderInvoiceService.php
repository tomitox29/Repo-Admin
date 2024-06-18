<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_DataProvider_OrderInvoiceService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.data_provider.order_invoice' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Invoice\OrderInvoiceDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.data_provider.order_invoice'] = new \PrestaShop\PrestaShop\Adapter\Invoice\OrderInvoiceDataProvider();
    }
}