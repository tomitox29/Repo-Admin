<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Customer_QueryHandler_GetCustomerForAddressCreationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.customer.query_handler.get_customer_for_address_creation' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Customer\QueryHandler\GetCustomerForAddressCreationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.customer.query_handler.get_customer_for_address_creation'] = new \PrestaShop\PrestaShop\Adapter\Customer\QueryHandler\GetCustomerForAddressCreationHandler();
    }
}
