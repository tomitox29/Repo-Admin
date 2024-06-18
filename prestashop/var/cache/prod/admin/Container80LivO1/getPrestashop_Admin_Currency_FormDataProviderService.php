<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_Currency_FormDataProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.currency.form_data_provider' shared service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\International\Currencies\CurrencyFormDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.currency.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\International\Currencies\CurrencyFormDataProvider();
    }
}