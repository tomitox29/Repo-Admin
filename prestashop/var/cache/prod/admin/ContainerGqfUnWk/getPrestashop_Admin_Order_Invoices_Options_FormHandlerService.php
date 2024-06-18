<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_Order_Invoices_Options_FormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.order.invoices.options.form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\Handler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.order.invoices.options.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.admin.order.invoices.options.data_provider'] ?? $container->load('getPrestashop_Admin_Order_Invoices_Options_DataProviderService')), 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\InvoiceOptionsType', 'OrdersInvoicesOptions');
    }
}
