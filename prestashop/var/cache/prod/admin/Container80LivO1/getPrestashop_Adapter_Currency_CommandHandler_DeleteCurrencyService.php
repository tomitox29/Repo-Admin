<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Currency_CommandHandler_DeleteCurrencyService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.currency.command_handler.delete_currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\DeleteCurrencyHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.currency.command_handler.delete_currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\DeleteCurrencyHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_CURRENCY_DEFAULT"));
    }
}
