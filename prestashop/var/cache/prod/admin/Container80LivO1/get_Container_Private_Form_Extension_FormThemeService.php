<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Form_Extension_FormThemeService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.form.extension.form_theme' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Extension\FormThemeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['twig.form.renderer'] ?? $container->load('getTwig_Form_RendererService'));

        if (isset($container->services['.container.private.form.extension.form_theme'])) {
            return $container->services['.container.private.form.extension.form_theme'];
        }

        return $container->services['.container.private.form.extension.form_theme'] = new \PrestaShopBundle\Form\Extension\FormThemeExtension($a);
    }
}
