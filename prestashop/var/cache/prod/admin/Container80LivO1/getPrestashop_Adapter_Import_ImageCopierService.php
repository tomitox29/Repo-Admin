<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Import_ImageCopierService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.import.image_copier' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Import\ImageCopier
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.import.image_copier'] = new \PrestaShop\PrestaShop\Adapter\Import\ImageCopier(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ??= new \PrestaShop\PrestaShop\Adapter\Tools()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->shop->id, ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}