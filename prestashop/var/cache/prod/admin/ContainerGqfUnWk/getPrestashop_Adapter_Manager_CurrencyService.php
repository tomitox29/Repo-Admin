<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Manager_CurrencyService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.manager.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.manager.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyManager();
    }
}
