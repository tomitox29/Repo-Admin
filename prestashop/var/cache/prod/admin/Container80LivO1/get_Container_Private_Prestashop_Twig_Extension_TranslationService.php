<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Twig_Extension_TranslationService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.twig.extension.translation' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\TranslationsExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->services['.container.private.prestashop.twig.extension.translation'])) {
            return $container->services['.container.private.prestashop.twig.extension.translation'];
        }
        $b = ($container->privates['twig'] ?? $container->load('getTwigService'));

        if (isset($container->services['.container.private.prestashop.twig.extension.translation'])) {
            return $container->services['.container.private.prestashop.twig.extension.translation'];
        }

        $container->services['.container.private.prestashop.twig.extension.translation'] = $instance = new \PrestaShopBundle\Twig\TranslationsExtension($a, $b);

        $instance->logger = ($container->services['logger'] ?? self::getLoggerService($container));
        $instance->translator = ($container->services['translator'] ?? self::getTranslatorService($container));

        return $instance;
    }
}