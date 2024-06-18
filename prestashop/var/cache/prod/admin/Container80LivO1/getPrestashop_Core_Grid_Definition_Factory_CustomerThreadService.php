<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Definition_Factory_CustomerThreadService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.definition.factory.customer_thread' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CustomerThreadGridDefinitionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.core.grid.definition.factory.customer_thread'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CustomerThreadGridDefinitionFactory(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['.container.private.prestashop.core.form.choice_provider.contact_type_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_ContactTypeChoiceProviderService')), ($container->services['prestashop.adapter.form.choice_provider.shop_name_by_id'] ??= new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ShopNameByIdChoiceProvider()), ($container->services['.container.private.prestashop.core.form.choice_provider.customer_thread_statuses_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_CustomerThreadStatusesChoiceProviderService')));

        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));

        return $instance;
    }
}
