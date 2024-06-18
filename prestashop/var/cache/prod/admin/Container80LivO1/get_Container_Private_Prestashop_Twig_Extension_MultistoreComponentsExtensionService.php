<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Twig_Extension_MultistoreComponentsExtensionService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.twig.extension.multistore_components_extension' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.core.admin.multistore'] ?? $container->load('getPrestashop_Core_Admin_MultistoreService'));

        if (isset($container->services['.container.private.prestashop.twig.extension.multistore_components_extension'])) {
            return $container->services['.container.private.prestashop.twig.extension.multistore_components_extension'];
        }

        return $container->services['.container.private.prestashop.twig.extension.multistore_components_extension'] = new \PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension($a);
    }
}
