<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_MailTheme_FormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.mail_theme.form_data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\Design\MailTheme\MailThemeFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.mail_theme.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\Design\MailTheme\MailThemeFormDataProvider(($container->services['prestashop.core.mail_theme.configuration'] ?? $container->load('getPrestashop_Core_MailTheme_ConfigurationService')));
    }
}
