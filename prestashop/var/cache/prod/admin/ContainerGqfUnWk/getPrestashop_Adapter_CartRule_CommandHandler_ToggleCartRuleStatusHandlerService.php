<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CartRule_CommandHandler_ToggleCartRuleStatusHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cart_rule.command_handler.toggle_cart_rule_status_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler\ToggleCartRuleStatusHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cart_rule.command_handler.toggle_cart_rule_status_handler'] = new \PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler\ToggleCartRuleStatusHandler();
    }
}