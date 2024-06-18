<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get__UxIcons_Command_Lock_LazyService extends AdminKernelProdContainer
{
    /*
     * Gets the private '..ux_icons.command.lock.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['..ux_icons.command.lock.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('ux:icons:lock', [], 'Scan project and import icon(s) from iconify.design', false, #[\Closure(name: '.ux_icons.command.lock', class: 'Symfony\\UX\\Icons\\Command\\LockIconsCommand')] fn (): \Symfony\UX\Icons\Command\LockIconsCommand => ($container->privates['.ux_icons.command.lock'] ?? $container->load('get_UxIcons_Command_LockService')));
    }
}
