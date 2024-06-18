<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_MailTemplate_VariablesBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.mail_template.variables_builder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutVariablesBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.mail_template.variables_builder'] = new \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutVariablesBuilder(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.core.language.language_default_fonts_catalog'] ??= new \PrestaShop\PrestaShop\Core\Language\LanguageDefaultFontsCatalog(['fa' => 'Tahoma', 'ar' => 'Tahoma'])), ['mailThemesUrl' => ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getMailThemesUrl()]);
    }
}
