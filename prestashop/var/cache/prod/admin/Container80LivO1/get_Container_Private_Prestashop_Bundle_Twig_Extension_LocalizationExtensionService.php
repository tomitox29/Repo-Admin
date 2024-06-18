<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Bundle_Twig_Extension_LocalizationExtensionService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.bundle.twig.extension.localization_extension' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\Extension\LocalizationExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.bundle.twig.extension.localization_extension'] = new \PrestaShopBundle\Twig\Extension\LocalizationExtension(($container->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] ?? self::getRepositoryService($container)), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\LanguageContext'] ?? self::getLanguageContextService($container)), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\CurrencyContext'] ?? $container->load('getCurrencyContextService')));
    }
}
