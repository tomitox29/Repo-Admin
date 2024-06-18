<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddVirtualProductFileHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler\AddVirtualProductFileHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler\AddVirtualProductFileHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\CommandHandler\\AddVirtualProductFileHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler\AddVirtualProductFileHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Update\\VirtualProductUpdater'] ?? $container->load('getVirtualProductUpdaterService')));
    }
}
