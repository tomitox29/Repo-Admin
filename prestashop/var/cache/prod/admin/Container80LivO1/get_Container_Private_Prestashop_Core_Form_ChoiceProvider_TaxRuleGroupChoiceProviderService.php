<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Form_ChoiceProvider_TaxRuleGroupChoiceProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.form.choice_provider.tax_rule_group_choice_provider' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\TaxRuleGroupChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.form.choice_provider.tax_rule_group_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\TaxRuleGroupChoiceProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->country->id, ($container->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Repository\\TaxRulesGroupRepository'] ?? $container->load('getTaxRulesGroupRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Tax\\TaxComputer'] ?? $container->load('getTaxComputerService')));
    }
}
