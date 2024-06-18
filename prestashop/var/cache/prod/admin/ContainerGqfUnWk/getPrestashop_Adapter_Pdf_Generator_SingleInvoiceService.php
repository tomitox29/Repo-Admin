<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Pdf_Generator_SingleInvoiceService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.pdf.generator.single_invoice' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\PDF\InvoicePdfGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.pdf.generator.single_invoice'] = new \PrestaShop\PrestaShop\Adapter\PDF\InvoicePdfGenerator();
    }
}
