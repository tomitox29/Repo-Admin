<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_Handler_CustomerFormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.handler.customer_form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.handler.customer_form_handler'] = ($container->services['prestashop.core.form.identifiable_object.handler.form_handler_factory'] ?? $container->load('getPrestashop_Core_Form_IdentifiableObject_Handler_FormHandlerFactoryService'))->create(($container->services['prestashop.core.form.identifiable_object.data_handler.customer_form_data_handler'] ?? $container->load('getPrestashop_Core_Form_IdentifiableObject_DataHandler_CustomerFormDataHandlerService')));
    }
}
