<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddProductRowTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Order\AddProductRowType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Order\AddProductRowType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\AddProductRowType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\AddProductRowType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['prestashop.adapter.form.choice_provider.order_invoice_by_id'] ?? $container->load('getPrestashop_Adapter_Form_ChoiceProvider_OrderInvoiceByIdService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id);
    }
}