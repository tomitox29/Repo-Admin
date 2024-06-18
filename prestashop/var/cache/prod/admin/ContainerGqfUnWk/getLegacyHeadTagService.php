<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLegacyHeadTagService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Twig\Component\Legacy\LegacyHeadTag' autowired service.
     *
     * @return \PrestaShopBundle\Twig\Component\Legacy\LegacyHeadTag
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\Legacy\\LegacyHeadTag'] = function ($container) {
            return new \PrestaShopBundle\Twig\Component\Legacy\LegacyHeadTag(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->privates['PrestaShopBundle\\Twig\\Layout\\MenuBuilder'] ?? $container->load('getMenuBuilderService')), ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->privates['PrestaShopBundle\\Twig\\Layout\\TemplateVariables'] ?? $container->load('getTemplateVariablesService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\CountryContext'] ?? $container->load('getCountryContextService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\ShopContext'] ?? $container->load('getShopContextService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\LanguageContext'] ?? self::getLanguageContextService($container)), ($container->privates['prestashop.default.language.context'] ?? $container->load('getPrestashop_Default_Language_ContextService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\LegacyControllerContext'] ?? $container->load('getLegacyControllerContextService')));
        };

        return $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\Legacy\\LegacyHeadTag']($container);
    }
}
