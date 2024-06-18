<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Loader_ChainService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'twig.loader.chain' shared service.
     *
     * @return \Twig\Loader\ChainLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['twig.loader.chain'] = $instance = new \Twig\Loader\ChainLoader();

        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 5));
        $a->addPath((\dirname(__DIR__, 5).'/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm'), 'Twig');
        $a->addPath((\dirname(__DIR__, 5).'/src/PrestaShopBundle/Resources/views/Admin/Common'), 'Common');
        $a->addPath((\dirname(__DIR__, 5).'/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters'), 'AdvancedParameters');
        $a->addPath((\dirname(__DIR__, 5).'/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters'), 'ShopParameters');
        $a->addPath((\dirname(__DIR__, 5).'/modules'), 'Modules');
        $a->addPath((\dirname(__DIR__, 5).'/mails/themes'), 'MailThemes');
        $a->addPath((\dirname(__DIR__, 5).'/src/PrestaShopBundle/Resources/views'), 'PrestaShopCore');
        $a->addPath((\dirname(__DIR__, 5).'/admin/themes/new-theme'), 'AdminNewTheme');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/api-platform/core/src/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/api-platform/core/src/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $a->addPath((\dirname(__DIR__, 5).'/src/PrestaShopBundle/Resources/views'), 'PrestaShop');
        $a->addPath((\dirname(__DIR__, 5).'/src/PrestaShopBundle/Resources/views'), '!PrestaShop');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/symfony/ux-twig-component/templates'), 'TwigComponent');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/symfony/ux-twig-component/templates'), '!TwigComponent');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 5).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $instance->addLoader(($container->services['.container.private.prestashop.twig.modules.loader'] ?? $container->load('get_Container_Private_Prestashop_Twig_Modules_LoaderService')));
        $instance->addLoader($a);

        return $instance;
    }
}
