<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get__UxIcons_Command_Search_LazyService extends AdminKernelProdContainer
{
    /*
     * Gets the private '..ux_icons.command.search.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['..ux_icons.command.search.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('ux:icons:search', [], 'Search icons and icon sets from ux.symfony.com', false, #[\Closure(name: '.ux_icons.command.search', class: 'Symfony\\UX\\Icons\\Command\\SearchIconCommand')] fn (): \Symfony\UX\Icons\Command\SearchIconCommand => ($container->privates['.ux_icons.command.search'] ?? $container->load('get_UxIcons_Command_SearchService')));
    }
}
