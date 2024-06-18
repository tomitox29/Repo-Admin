<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Pdf_CreditSlipPdfGeneratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.pdf.credit_slip_pdf_generator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\PDF\CreditSlipPdfGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.pdf.credit_slip_pdf_generator'] = new \PrestaShop\PrestaShop\Adapter\PDF\CreditSlipPdfGenerator('ps_', ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)));
    }
}