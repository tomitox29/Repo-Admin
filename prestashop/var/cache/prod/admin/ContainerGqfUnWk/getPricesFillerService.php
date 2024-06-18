<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPricesFillerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler\PricesFiller' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler\PricesFiller
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\Filler\\PricesFiller'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler\PricesFiller();
    }
}