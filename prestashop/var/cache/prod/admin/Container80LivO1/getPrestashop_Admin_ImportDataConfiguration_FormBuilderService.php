<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_ImportDataConfiguration_FormBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.import_data_configuration.form_builder' shared service.
     *
     * @return \Symfony\Component\Form\FormBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.import_data_configuration.form_builder'] = ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService'))->createNamedBuilder('', 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Import\\ImportDataConfigurationType');
    }
}
