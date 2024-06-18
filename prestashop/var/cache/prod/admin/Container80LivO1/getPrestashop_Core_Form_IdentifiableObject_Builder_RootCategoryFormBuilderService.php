<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_Builder_RootCategoryFormBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.builder.root_category_form_builder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.builder.root_category_form_builder'] = ($container->services['prestashop.core.form.builder.form_builder_factory'] ?? $container->load('getPrestashop_Core_Form_Builder_FormBuilderFactoryService'))->create('PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\RootCategoryType', ($container->services['prestashop.core.form.identifiable_object.data_provider.category_form_data_provider'] ?? $container->load('getPrestashop_Core_Form_IdentifiableObject_DataProvider_CategoryFormDataProviderService')));
    }
}
