<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonyCacheClearerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Cache\Clearer\SymfonyCacheClearer' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SymfonyCacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Cache\\Clearer\\SymfonyCacheClearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SymfonyCacheClearer(($container->services['logger'] ?? self::getLoggerService($container)));
    }
}
