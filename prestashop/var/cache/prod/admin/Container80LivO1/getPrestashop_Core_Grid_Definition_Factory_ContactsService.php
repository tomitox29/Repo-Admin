<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Definition_Factory_ContactsService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.definition.factory.contacts' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ContactGridDefinitionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.core.grid.definition.factory.contacts'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ContactGridDefinitionFactory(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));

        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));

        return $instance;
    }
}
