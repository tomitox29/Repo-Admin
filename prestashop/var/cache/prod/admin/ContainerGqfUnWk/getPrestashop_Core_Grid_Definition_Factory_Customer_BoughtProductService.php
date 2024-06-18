<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Definition_Factory_Customer_BoughtProductService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.definition.factory.customer.bought_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CustomerBoughtProductGridDefinitionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.core.grid.definition.factory.customer.bought_product'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CustomerBoughtProductGridDefinitionFactory(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->date_format_full);

        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));

        return $instance;
    }
}
