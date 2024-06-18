<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExportCataloguesTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Improve\International\Translations\ExportCataloguesType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\International\Translations\ExportCataloguesType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\ExportCataloguesType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Translations\ExportCataloguesType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.prestashop.core.form.choice_provider.translation_type'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_TranslationTypeService'))->getExportCoreChoices(), ($container->services['.container.private.prestashop.core.form.choice_provider.theme_by_name'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_ThemeByNameService'))->getChoices(), ($container->services['.container.private.prestashop.core.form.choice_provider.module_by_name'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_ModuleByNameService'))->getChoices());
    }
}
