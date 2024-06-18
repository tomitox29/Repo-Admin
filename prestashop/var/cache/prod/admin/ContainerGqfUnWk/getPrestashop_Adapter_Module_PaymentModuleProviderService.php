<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Module_PaymentModuleProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.module.payment_module_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\PaymentModuleListProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository'] ?? $container->load('getModuleRepositoryService'));

        if (isset($container->services['prestashop.adapter.module.payment_module_provider'])) {
            return $container->services['prestashop.adapter.module.payment_module_provider'];
        }

        return $container->services['prestashop.adapter.module.payment_module_provider'] = new \PrestaShop\PrestaShop\Adapter\Module\PaymentModuleListProvider($a, ($container->services['prestashop.bundle.repository.module'] ?? $container->load('getPrestashop_Bundle_Repository_ModuleService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id);
    }
}
