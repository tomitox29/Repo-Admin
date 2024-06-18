<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Q3sMvWJService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.q3sMvWJ' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.q3sMvWJ'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.catalog_price_rule.command_handler.delete_catalog_price_rule_handler'] ??= new \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\CommandHandler\DeleteCatalogPriceRuleHandler())->handle(...), ['method' => 'handle']);
    }
}
