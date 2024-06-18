<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_EmailConfiguration_FormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.email_configuration.form_data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Email\EmailConfigurationFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.email_configuration.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Email\EmailConfigurationFormDataProvider(($container->services['prestashop.core.email.email_configurator'] ?? $container->load('getPrestashop_Core_Email_EmailConfiguratorService')));
    }
}
