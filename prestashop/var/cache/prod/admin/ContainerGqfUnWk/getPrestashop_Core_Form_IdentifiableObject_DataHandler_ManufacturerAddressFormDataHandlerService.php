<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_DataHandler_ManufacturerAddressFormDataHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.data_handler.manufacturer_address_form_data_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\ManufacturerAddressFormDataHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.data_handler.manufacturer_address_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\ManufacturerAddressFormDataHandler(($container->services['prestashop.core.command_bus'] ?? $container->load('getPrestashop_Core_CommandBusService')));
    }
}
