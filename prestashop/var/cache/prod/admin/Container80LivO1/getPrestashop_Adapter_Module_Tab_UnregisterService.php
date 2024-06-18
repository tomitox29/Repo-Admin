<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Module_Tab_UnregisterService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.module.tab.unregister' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.module.tab.unregister'] = new \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister(($container->services['.container.private.prestashop.core.admin.tab.repository'] ?? self::get_Container_Private_Prestashop_Core_Admin_Tab_RepositoryService($container)), ($container->services['prestashop.core.admin.lang.repository'] ?? self::getPrestashop_Core_Admin_Lang_RepositoryService($container)), ($container->services['logger'] ?? self::getLoggerService($container)), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}