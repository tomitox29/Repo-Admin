<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Store_CommandHandler_ToggleStoreStatusService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.store.command_handler.toggle_store_status' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Store\CommandHandler\ToggleStoreStatusHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.store.command_handler.toggle_store_status'] = new \PrestaShop\PrestaShop\Adapter\Store\CommandHandler\ToggleStoreStatusHandler(($container->services['.container.private.prestashop.core.domain.store.repository.store_repository'] ?? $container->load('get_Container_Private_Prestashop_Core_Domain_Store_Repository_StoreRepositoryService')));
    }
}