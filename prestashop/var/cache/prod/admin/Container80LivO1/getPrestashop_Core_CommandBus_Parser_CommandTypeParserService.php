<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_CommandBus_Parser_CommandTypeParserService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.command_bus.parser.command_type_parser' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandTypeParser
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.command_bus.parser.command_type_parser'] = new \PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandTypeParser();
    }
}
