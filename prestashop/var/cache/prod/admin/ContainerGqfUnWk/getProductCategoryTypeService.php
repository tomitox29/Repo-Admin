<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCategoryTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\Category\ProductCategoryType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\Category\ProductCategoryType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\ProductCategoryType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Category\ProductCategoryType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages());
    }
}
