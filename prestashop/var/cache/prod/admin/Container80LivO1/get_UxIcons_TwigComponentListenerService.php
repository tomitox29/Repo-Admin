<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_TwigComponentListenerService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.ux_icons.twig_component_listener' shared service.
     *
     * @return \Symfony\UX\Icons\Twig\UXIconComponentListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.ux_icons.twig_component_listener'] = new \Symfony\UX\Icons\Twig\UXIconComponentListener(($container->privates['.ux_icons.icon_renderer'] ?? $container->load('get_UxIcons_IconRendererService')));
    }
}
