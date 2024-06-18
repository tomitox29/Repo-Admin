<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLowStockThresholdTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\Combination\LowStockThresholdType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\Combination\LowStockThresholdType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\LowStockThresholdType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\LowStockThresholdType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\LowStockThresholdType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Combination\LowStockThresholdType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), $a);
    }
}