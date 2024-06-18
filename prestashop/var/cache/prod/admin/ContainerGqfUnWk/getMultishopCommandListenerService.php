<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultishopCommandListenerService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\EventListener\Console\MultishopCommandListener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\Console\MultishopCommandListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\EventListener\\Console\\MultishopCommandListener'] = new \PrestaShopBundle\EventListener\Console\MultishopCommandListener(($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['kernel'] ?? $container->get('kernel'))->getRootDir());
    }
}
