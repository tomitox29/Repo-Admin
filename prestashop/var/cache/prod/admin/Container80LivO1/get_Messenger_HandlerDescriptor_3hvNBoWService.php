<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_3hvNBoWService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.3hvNBoW' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.3hvNBoW'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.notification.command_handler.update_employee_notification_last_element_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Notification\CommandHandler\UpdateEmployeeNotificationLastElementHandler())->handle(...), ['method' => 'handle']);
    }
}
