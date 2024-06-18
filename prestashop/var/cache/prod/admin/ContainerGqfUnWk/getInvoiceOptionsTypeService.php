<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInvoiceOptionsTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceOptionsType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceOptionsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\InvoiceOptionsType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceOptionsType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.prestashop.core.form.choice_provider.invoice_model_by_name'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_InvoiceModelByNameService')), ($container->services['prestashop.adapter.data_provider.order_invoice'] ??= new \PrestaShop\PrestaShop\Adapter\Invoice\OrderInvoiceDataProvider())->getNextInvoiceNumber());
    }
}