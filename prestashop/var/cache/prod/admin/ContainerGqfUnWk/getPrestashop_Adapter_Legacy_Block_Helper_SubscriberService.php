<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.legacy.block.helper.subscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.legacy.block.helper.subscriber'] = new \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber();
    }
}
