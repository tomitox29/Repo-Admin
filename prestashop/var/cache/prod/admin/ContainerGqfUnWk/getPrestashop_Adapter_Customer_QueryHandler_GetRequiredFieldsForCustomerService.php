<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Customer_QueryHandler_GetRequiredFieldsForCustomerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.customer.query_handler.get_required_fields_for_customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Customer\QueryHandler\GetRequiredFieldsForCustomerHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.customer.query_handler.get_required_fields_for_customer'] = new \PrestaShop\PrestaShop\Adapter\Customer\QueryHandler\GetRequiredFieldsForCustomerHandler();
    }
}