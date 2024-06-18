<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Order_Delivery_Slip_Pdf_FormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order.delivery.slip.pdf.form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\Handler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order.delivery.slip.pdf.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.adapter.order.delivery.slip.pdf.form_provider'] ?? $container->load('getPrestashop_Adapter_Order_Delivery_Slip_Pdf_FormProviderService')), 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Delivery\\SlipPdfType', 'OrderDeliverySlipPdf', 'slip_pdf_form');
    }
}
