<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Tab_CommandHandler_UpdateTabStatusByClassNameCommandHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.tab.command_handler.update_tab_status_by_class_name_command_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tab\CommandHandler\UpdateTabStatusByClassNameHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.tab.command_handler.update_tab_status_by_class_name_command_handler'] = new \PrestaShop\PrestaShop\Adapter\Tab\CommandHandler\UpdateTabStatusByClassNameHandler(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}