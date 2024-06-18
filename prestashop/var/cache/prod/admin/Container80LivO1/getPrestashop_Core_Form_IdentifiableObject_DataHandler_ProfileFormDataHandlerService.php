<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_DataHandler_ProfileFormDataHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.data_handler.profile_form_data_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\ProfileFormDataHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.data_handler.profile_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\ProfileFormDataHandler(($container->services['prestashop.core.command_bus'] ?? $container->load('getPrestashop_Core_CommandBusService')), ($container->services['prestashop.adapter.image.uploader.profile_image_uploader'] ??= new \PrestaShop\PrestaShop\Adapter\Image\Uploader\ProfileImageUploader((\dirname(__DIR__, 5).'/img/pr/'), (\dirname(__DIR__, 5).'/img/tmp/'))));
    }
}
