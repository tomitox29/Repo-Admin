<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Meta_CommandHandler_SaveMetaService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.meta.command_handler.save_meta' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Meta\CommandHandler\AddMetaHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.meta.command_handler.save_meta'] = new \PrestaShop\PrestaShop\Adapter\Meta\CommandHandler\AddMetaHandler(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->privates['validator'] ?? self::getValidatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_LANG_DEFAULT"), ($container->services['prestashop.adapter.meta.data_provider'] ??= new \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider()));
    }
}