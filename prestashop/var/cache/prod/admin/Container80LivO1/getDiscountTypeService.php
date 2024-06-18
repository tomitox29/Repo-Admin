<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDiscountTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\CartRule\DiscountType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\CartRule\DiscountType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\CartRule\\DiscountType'] = new \PrestaShopBundle\Form\Admin\Sell\CartRule\DiscountType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\CartRule\\EventListener\\DiscountListener'] ?? $container->load('getDiscountListenerService')), ($container->privates['PrestaShop\\PrestaShop\\Core\\Form\\ChoiceProvider\\DiscountApplicationChoiceProvider'] ?? $container->load('getDiscountApplicationChoiceProviderService')));
    }
}
