<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Twig_Extension_HookService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.twig.extension.hook' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\HookExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.twig.extension.hook'] = new \PrestaShopBundle\Twig\HookExtension(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.adapter.data_provider.module'] ?? $container->load('getPrestashop_Adapter_DataProvider_ModuleService')), ((($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->employee) ? (($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository'] ?? $container->load('getModuleRepositoryService'))) : (null)));
    }
}
