<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_UALAMFWService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.uALAMFW' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.uALAMFW'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.core.domain.sql_management.query_handler.get_sql_request_settings'] ?? $container->load('getPrestashop_Core_Domain_SqlManagement_QueryHandler_GetSqlRequestSettingsService'))->handle(...), ['method' => 'handle']);
    }
}
