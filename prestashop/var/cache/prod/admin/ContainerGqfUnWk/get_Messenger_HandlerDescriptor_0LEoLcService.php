<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_0LEoLcService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.0LEoLc_' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.0LEoLc_'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.tax_rules_group.command_handler.set_tax_rules_group_status_handler'] ??= new \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler\SetTaxRulesGroupStatusHandler())->handle(...), ['method' => 'handle']);
    }
}
