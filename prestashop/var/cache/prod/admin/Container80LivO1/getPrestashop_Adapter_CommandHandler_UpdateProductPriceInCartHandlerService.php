<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CommandHandler_UpdateProductPriceInCartHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.command_handler.update_product_price_in_cart_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateProductPriceInCartHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.command_handler.update_product_price_in_cart_handler'] = new \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateProductPriceInCartHandler();
    }
}
