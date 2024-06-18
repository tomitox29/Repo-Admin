<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackageFrontJsService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'assets._package_front_js' shared service.
     *
     * @return \Symfony\Component\Asset\PathPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['assets._package_front_js'] = new \Symfony\Component\Asset\PathPackage('../js', ($container->privates['assets._version__default'] ?? $container->load('getAssets_VersionDefaultService')), ($container->privates['assets.context'] ?? $container->load('getAssets_ContextService')));
    }
}
