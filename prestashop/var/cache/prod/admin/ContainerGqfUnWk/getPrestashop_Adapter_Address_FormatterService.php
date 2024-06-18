<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Address_FormatterService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.address.formatter' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Address\AddressFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.address.formatter'] = new \PrestaShop\PrestaShop\Adapter\Address\AddressFormatter();
    }
}
