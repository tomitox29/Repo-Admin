<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_Order_Invoices_Options_DataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.order.invoices.options.data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceOptionsDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.order.invoices.options.data_provider'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceOptionsDataProvider(($container->services['prestashop.adapter.order.invoice_options.configuration'] ?? $container->load('getPrestashop_Adapter_Order_InvoiceOptions_ConfigurationService')), ($container->services['prestashop.adapter.data_provider.order_invoice'] ??= new \PrestaShop\PrestaShop\Adapter\Invoice\OrderInvoiceDataProvider())->getNextInvoiceNumber());
    }
}