<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportDataConfigurationTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportDataConfigurationType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportDataConfigurationType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Import\\ImportDataConfigurationType'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportDataConfigurationType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.prestashop.core.form.choice_provider.import_match_configuration'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_ImportMatchConfigurationService'))->getChoices(), ($container->services['.container.private.prestashop.core.form.choice_provider.import_entity_field'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_ImportEntityFieldService'))->getChoices());
    }
}
