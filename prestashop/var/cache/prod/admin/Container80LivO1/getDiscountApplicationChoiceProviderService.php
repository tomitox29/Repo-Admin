<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDiscountApplicationChoiceProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Core\Form\ChoiceProvider\DiscountApplicationChoiceProvider' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\DiscountApplicationChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Core\\Form\\ChoiceProvider\\DiscountApplicationChoiceProvider'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\DiscountApplicationChoiceProvider(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
