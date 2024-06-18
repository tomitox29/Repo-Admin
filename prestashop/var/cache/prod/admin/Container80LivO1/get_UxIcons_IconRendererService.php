<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_IconRendererService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.ux_icons.icon_renderer' shared service.
     *
     * @return \Symfony\UX\Icons\IconRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.ux_icons.icon_renderer'] = new \Symfony\UX\Icons\IconRenderer(($container->privates['.ux_icons.cache_icon_registry'] ?? $container->load('get_UxIcons_CacheIconRegistryService')), ['fill' => 'currentColor']);
    }
}
