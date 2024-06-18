<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExtraModulesTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\ExtraModulesType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\ExtraModulesType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository'] ?? $container->load('getModuleRepositoryService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\ExtraModulesType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\ExtraModulesType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\ExtraModulesType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\ExtraModulesType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.adapter.data_provider.module'] ?? $container->load('getPrestashop_Adapter_DataProvider_ModuleService')), $a);
    }
}
