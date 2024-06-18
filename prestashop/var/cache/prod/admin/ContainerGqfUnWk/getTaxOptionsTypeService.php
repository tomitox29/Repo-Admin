<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxOptionsTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Improve\International\Tax\TaxOptionsType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\International\Tax\TaxOptionsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Tax\\TaxOptionsType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Tax\TaxOptionsType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_USE_ECOTAX"), ($container->services['.container.private.prestashop.core.form.choice_provider.tax_address_type_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_TaxAddressTypeChoiceProviderService')), ($container->services['.container.private.prestashop.core.form.choice_provider.tax_rule_group_choice_provider'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_TaxRuleGroupChoiceProviderService')));
    }
}
