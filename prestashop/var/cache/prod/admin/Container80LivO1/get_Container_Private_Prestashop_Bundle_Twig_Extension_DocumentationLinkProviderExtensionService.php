<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Bundle_Twig_Extension_DocumentationLinkProviderExtensionService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.bundle.twig.extension.documentation_link_provider_extension' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\Extension\DocumentationLinkExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.bundle.twig.extension.documentation_link_provider_extension'] = new \PrestaShopBundle\Twig\Extension\DocumentationLinkExtension(($container->services['PrestaShop\\PrestaShop\\Core\\Util\\HelperCard\\DocumentationLinkProviderInterface'] ?? $container->load('getDocumentationLinkProviderInterfaceService')));
    }
}
