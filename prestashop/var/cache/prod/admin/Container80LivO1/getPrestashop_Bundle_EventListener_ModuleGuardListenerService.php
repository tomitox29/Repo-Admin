<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Bundle_EventListener_ModuleGuardListenerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.bundle.event_listener.module_guard_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\ModuleGuardListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.bundle.event_listener.module_guard_listener'] = new \PrestaShopBundle\EventListener\ModuleGuardListener(($container->services['prestashop.core.security.folder_guard.vendor'] ??= new \PrestaShop\PrestaShop\Core\Security\HtaccessFolderGuard((\dirname(__DIR__, 5).'/app/Resources/security/.htaccess.dist'))), (\dirname(__DIR__, 5).'/modules'), ($container->services['logger'] ?? self::getLoggerService($container)));
    }
}
