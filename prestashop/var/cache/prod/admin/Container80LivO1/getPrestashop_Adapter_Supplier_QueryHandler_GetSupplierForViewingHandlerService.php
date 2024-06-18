<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Supplier_QueryHandler_GetSupplierForViewingHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.supplier.query_handler.get_supplier_for_viewing_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Supplier\QueryHandler\GetSupplierForViewingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.supplier.query_handler.get_supplier_for_viewing_handler'] = new \PrestaShop\PrestaShop\Adapter\Supplier\QueryHandler\GetSupplierForViewingHandler(($container->services['prestashop.core.localization.locale.context_locale'] ?? $container->load('getPrestashop_Core_Localization_Locale_ContextLocaleService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_CURRENCY_DEFAULT"));
    }
}
