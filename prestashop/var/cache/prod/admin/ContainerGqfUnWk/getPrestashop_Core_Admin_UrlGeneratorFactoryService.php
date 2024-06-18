<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Admin_UrlGeneratorFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.admin.url_generator_factory' shared service.
     *
     * @return \PrestaShopBundle\Service\TransitionalBehavior\AdminUrlGeneratorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.admin.url_generator_factory'] = new \PrestaShopBundle\Service\TransitionalBehavior\AdminUrlGeneratorFactory(($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService')));
    }
}