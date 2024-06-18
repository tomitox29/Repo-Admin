<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Pdf_OrderInvoicePdfGeneratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.pdf.order_invoice_pdf_generator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\PDF\OrderInvoicePdfGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.pdf.order_invoice_pdf_generator'] = new \PrestaShop\PrestaShop\Adapter\PDF\OrderInvoicePdfGenerator(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
