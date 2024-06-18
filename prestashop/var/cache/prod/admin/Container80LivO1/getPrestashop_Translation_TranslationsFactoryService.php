<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_TranslationsFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.translations_factory' shared service.
     *
     * @return \PrestaShopBundle\Translation\Factory\TranslationsFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.translation.translations_factory'] = $instance = new \PrestaShopBundle\Translation\Factory\TranslationsFactory();

        $instance->addProvider(($container->services['prestashop.translation.backoffice_provider'] ?? $container->load('getPrestashop_Translation_BackofficeProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.frontoffice_provider'] ?? $container->load('getPrestashop_Translation_FrontofficeProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.mails_provider'] ?? $container->load('getPrestashop_Translation_MailsProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.mails_body_provider'] ?? $container->load('getPrestashop_Translation_MailsBodyProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.others_provider'] ?? $container->load('getPrestashop_Translation_OthersProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.modules_provider'] ?? $container->load('getPrestashop_Translation_ModulesProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.external_module_provider'] ?? $container->load('getPrestashop_Translation_ExternalModuleProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.module_provider'] ?? $container->load('getPrestashop_Translation_ModuleProviderService')));
        $instance->addProvider(($container->services['prestashop.translation.search_provider'] ?? $container->load('getPrestashop_Translation_SearchProviderService')));

        return $instance;
    }
}
