<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddOrderCartRuleTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Order\AddOrderCartRuleType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Order\AddOrderCartRuleType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\AddOrderCartRuleType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\AddOrderCartRuleType(($container->services['.container.private.prestashop.core.form.choice.provider.order_discount_type'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_Choice_Provider_OrderDiscountTypeService')), ($container->services['prestashop.adapter.form.choice_provider.order_invoice_by_id'] ?? $container->load('getPrestashop_Adapter_Form_ChoiceProvider_OrderInvoiceByIdService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id, ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
