<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCopyLanguageTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Improve\International\Translations\CopyLanguageType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\International\Translations\CopyLanguageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\CopyLanguageType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Translations\CopyLanguageType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.prestashop.core.form.choice_provider.theme_by_name'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_ThemeByNameService'))->getChoices());
    }
}