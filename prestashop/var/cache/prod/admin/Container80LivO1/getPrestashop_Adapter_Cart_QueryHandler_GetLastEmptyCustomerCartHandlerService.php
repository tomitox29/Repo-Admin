<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Cart_QueryHandler_GetLastEmptyCustomerCartHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cart.query_handler.get_last_empty_customer_cart_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Cart\QueryHandler\GetLastEmptyCustomerCartHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cart.query_handler.get_last_empty_customer_cart_handler'] = new \PrestaShop\PrestaShop\Adapter\Cart\QueryHandler\GetLastEmptyCustomerCartHandler();
    }
}
