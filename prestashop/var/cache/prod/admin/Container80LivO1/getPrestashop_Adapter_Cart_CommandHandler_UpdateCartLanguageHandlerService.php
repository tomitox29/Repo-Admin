<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Cart_CommandHandler_UpdateCartLanguageHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cart.command_handler.update_cart_language_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateCartLanguageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cart.command_handler.update_cart_language_handler'] = new \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateCartLanguageHandler();
    }
}
