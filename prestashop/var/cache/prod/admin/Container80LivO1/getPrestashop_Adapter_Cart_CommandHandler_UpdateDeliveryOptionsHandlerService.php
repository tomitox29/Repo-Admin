<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Cart_CommandHandler_UpdateDeliveryOptionsHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cart.command_handler.update_delivery_options_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateCartDeliverySettingsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cart.command_handler.update_delivery_options_handler'] = new \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateCartDeliverySettingsHandler(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
