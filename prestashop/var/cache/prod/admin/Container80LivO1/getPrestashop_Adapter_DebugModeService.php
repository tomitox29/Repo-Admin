<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_DebugModeService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.debug_mode' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Debug\DebugMode
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.debug_mode'] = new \PrestaShop\PrestaShop\Adapter\Debug\DebugMode();
    }
}
