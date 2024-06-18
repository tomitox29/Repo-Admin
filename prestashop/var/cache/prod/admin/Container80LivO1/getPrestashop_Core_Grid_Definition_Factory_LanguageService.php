<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Definition_Factory_LanguageService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.definition.factory.language' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\LanguageGridDefinitionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.core.grid.definition.factory.language'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\LanguageGridDefinitionFactory(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));

        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));

        return $instance;
    }
}
