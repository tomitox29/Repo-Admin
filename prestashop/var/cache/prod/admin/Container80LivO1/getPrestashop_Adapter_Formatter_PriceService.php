<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Formatter_PriceService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.formatter.price' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.formatter.price'] = new \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter();
    }
}
