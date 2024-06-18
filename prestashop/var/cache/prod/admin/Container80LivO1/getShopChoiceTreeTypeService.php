<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShopChoiceTreeTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Type\ShopChoiceTreeType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\ShopChoiceTreeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Type\\ShopChoiceTreeType'] = new \PrestaShopBundle\Form\Admin\Type\ShopChoiceTreeType(($container->services['.container.private.prestashop.adapter.form.choice_provider.shop_tree_choice_provider'] ??= new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ShopTreeChoiceProvider()), ($container->services['.container.private.prestashop.bundle.form.data_transformer.default_language_to_filled_array'] ?? $container->load('get_Container_Private_Prestashop_Bundle_Form_DataTransformer_DefaultLanguageToFilledArrayService')), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)));
    }
}