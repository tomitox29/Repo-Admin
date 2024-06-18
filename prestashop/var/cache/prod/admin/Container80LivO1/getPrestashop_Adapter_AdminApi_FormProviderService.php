<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_AdminApi_FormProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.admin_api.form_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\AdminAPI\FormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.admin_api.form_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\AdminAPI\FormDataProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\AdminAPI\\AdminAPIConfiguration'] ?? $container->load('getAdminAPIConfigurationService')));
    }
}
