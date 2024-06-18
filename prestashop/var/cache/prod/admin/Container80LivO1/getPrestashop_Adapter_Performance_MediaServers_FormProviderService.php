<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Performance_MediaServers_FormProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.performance.media_servers.form_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\PerformanceFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.performance.media_servers.form_provider'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\PerformanceFormDataProvider(($container->services['prestashop.adapter.media_servers.configuration'] ?? $container->load('getPrestashop_Adapter_MediaServers_ConfigurationService')));
    }
}
