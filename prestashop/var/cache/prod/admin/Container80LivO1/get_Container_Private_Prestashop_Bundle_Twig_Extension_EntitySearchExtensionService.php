<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Bundle_Twig_Extension_EntitySearchExtensionService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.bundle.twig.extension.entity_search_extension' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\Extension\EntitySearchExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.bundle.twig.extension.entity_search_extension'] = new \PrestaShopBundle\Twig\Extension\EntitySearchExtension();
    }
}
