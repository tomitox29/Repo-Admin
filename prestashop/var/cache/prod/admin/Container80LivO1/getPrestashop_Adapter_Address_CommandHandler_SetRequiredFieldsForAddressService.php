<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Address_CommandHandler_SetRequiredFieldsForAddressService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.address.command_handler.set_required_fields_for_address' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Address\CommandHandler\SetRequiredFieldsForAddressHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.address.command_handler.set_required_fields_for_address'] = new \PrestaShop\PrestaShop\Adapter\Address\CommandHandler\SetRequiredFieldsForAddressHandler();
    }
}