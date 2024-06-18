<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Store_CommandHandler_BulkDeleteStoreHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.store.command_handler.bulk_delete_store_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Store\CommandHandler\BulkDeleteStoreHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.store.command_handler.bulk_delete_store_handler'] = new \PrestaShop\PrestaShop\Adapter\Store\CommandHandler\BulkDeleteStoreHandler(($container->services['.container.private.prestashop.core.domain.store.repository.store_repository'] ?? $container->load('get_Container_Private_Prestashop_Core_Domain_Store_Repository_StoreRepositoryService')));
    }
}
