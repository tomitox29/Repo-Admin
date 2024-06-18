<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_B7G00PAService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.b7G00PA' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.b7G00PA'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.employee.query_handler.get_employee_email_by_id_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Profile\Employee\QueryHandler\GetEmployeeEmailByIdHandler())->handle(...), ['method' => 'handle']);
    }
}
