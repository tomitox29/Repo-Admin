<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_RouterDebugService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService')), ($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter(NULL)));

        $instance->setName('debug:router');
        $instance->setDescription('Display current routes for an application');

        return $instance;
    }
}
