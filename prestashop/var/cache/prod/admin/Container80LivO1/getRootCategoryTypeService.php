<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRootCategoryTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Catalog\Category\RootCategoryType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Catalog\Category\RootCategoryType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\RootCategoryType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\RootCategoryType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\RootCategoryType'] = new \PrestaShopBundle\Form\Admin\Catalog\Category\RootCategoryType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.prestashop.core.form.choice_provider.group_by_id'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_GroupByIdService'))->getChoices(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), $a);
    }
}