<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_Sell_Order_CreditSlip_CreditSlipOptionsFormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.sell.order.credit_slip.credit_slip_options_form_data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Order\CreditSlip\CreditSlipOptionsFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.sell.order.credit_slip.credit_slip_options_form_data_provider'] = new \PrestaShopBundle\Form\Admin\Sell\Order\CreditSlip\CreditSlipOptionsFormDataProvider(($container->services['prestashop.core.credit_slip.credit_slip_options.configuration'] ?? $container->load('getPrestashop_Core_CreditSlip_CreditSlipOptions_ConfigurationService')));
    }
}
