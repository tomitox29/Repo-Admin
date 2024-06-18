<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Logs_FormProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.logs.form_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Logs\LogsFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.logs.form_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Logs\LogsFormDataProvider(($container->services['prestashop.adapter.logs.configuration'] ?? $container->load('getPrestashop_Adapter_Logs_ConfigurationService')));
    }
}
