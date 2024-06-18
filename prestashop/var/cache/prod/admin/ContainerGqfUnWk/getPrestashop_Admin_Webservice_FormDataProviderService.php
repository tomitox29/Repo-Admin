<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_Webservice_FormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.webservice.form_data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice\WebserviceFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.webservice.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Webservice\WebserviceFormDataProvider(($container->services['prestashop.adapter.webservice.configuration'] ?? $container->load('getPrestashop_Adapter_Webservice_ConfigurationService')));
    }
}