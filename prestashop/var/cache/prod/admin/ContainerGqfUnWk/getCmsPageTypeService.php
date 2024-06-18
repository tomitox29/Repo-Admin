<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmsPageTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Improve\Design\Pages\CmsPageType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\Design\Pages\CmsPageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Pages\\CmsPageType'] = new \PrestaShopBundle\Form\Admin\Improve\Design\Pages\CmsPageType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['.container.private.prestashop.core.form.choice_provider.cms_categories'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_CmsCategoriesService'))->getChoices(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container))->isUsed());
    }
}
