<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAbandonedCartKpiService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Kpi\AbandonedCartKpi' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Kpi\AbandonedCartKpi
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Kpi\\AbandonedCartKpi'] = new \PrestaShop\PrestaShop\Adapter\Kpi\AbandonedCartKpi(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)), ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->privates['PrestaShop\\PrestaShop\\Core\\Context\\LanguageContext'] ?? self::getLanguageContextService($container)), ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService')));
    }
}