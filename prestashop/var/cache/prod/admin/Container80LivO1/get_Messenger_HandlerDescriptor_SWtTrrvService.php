<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_SWtTrrvService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.SWtTrrv' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.SWtTrrv'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.catalog_price_rule.query_handler.get_catalog_price_rule_list_for_product_handler'] ?? $container->load('getPrestashop_Adapter_CatalogPriceRule_QueryHandler_GetCatalogPriceRuleListForProductHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
