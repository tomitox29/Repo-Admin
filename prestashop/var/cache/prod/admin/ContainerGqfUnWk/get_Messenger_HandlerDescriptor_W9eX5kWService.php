<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_W9eX5kWService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.W9eX5kW' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.W9eX5kW'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.customer.query_handler.get_required_fields_for_customer'] ??= new \PrestaShop\PrestaShop\Adapter\Customer\QueryHandler\GetRequiredFieldsForCustomerHandler())->handle(...), ['method' => 'handle']);
    }
}
