<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockAvailableValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Validate\\StockAvailableValidator'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator();
    }
}
