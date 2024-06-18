<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_NcjxHrnService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.NcjxHrn' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.NcjxHrn'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.tax.query_handler.get_tax_for_editing_handler'] ??= new \PrestaShop\PrestaShop\Adapter\Tax\QueryHandler\GetTaxForEditingHandler())->handle(...), ['method' => 'handle']);
    }
}