<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Twig_Extension_LayoutService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.twig.extension.layout' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\LayoutExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.twig.extension.layout'] = new \PrestaShopBundle\Twig\LayoutExtension(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? self::getCurrencyDataProviderService($container)));
    }
}
