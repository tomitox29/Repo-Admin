<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttributeGroupFormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\AttributeGroupFormHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\Handler\\AttributeGroupFormHandler'] = ($container->services['prestashop.core.form.identifiable_object.handler.form_handler_factory'] ?? $container->load('getPrestashop_Core_Form_IdentifiableObject_Handler_FormHandlerFactoryService'))->create(($container->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataHandler\\AttributeGroupFormDataHandler'] ?? $container->load('getAttributeGroupFormDataHandlerService')));
    }
}