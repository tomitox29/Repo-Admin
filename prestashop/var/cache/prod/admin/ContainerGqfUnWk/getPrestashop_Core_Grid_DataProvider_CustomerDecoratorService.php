<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_DataProvider_CustomerDecoratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.data_provider.customer_decorator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CustomerGridDataFactoryDecorator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.data_provider.customer_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CustomerGridDataFactoryDecorator(($container->services['prestashop.core.grid.data_provider.customer'] ?? $container->load('getPrestashop_Core_Grid_DataProvider_CustomerService')), ($container->services['prestashop.core.localization.locale.context_locale'] ?? $container->load('getPrestashop_Core_Localization_Locale_ContextLocaleService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->currency->iso_code);
    }
}
