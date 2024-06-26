<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Form_IdentifiableObject_CurrencyFormDataHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.form.identifiable_object.currency_form_data_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\CurrencyFormDataHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.form.identifiable_object.currency_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\CurrencyFormDataHandler(($container->services['prestashop.core.command_bus'] ?? $container->load('getPrestashop_Core_CommandBusService')), [($container->services['PrestaShop\\PrestaShop\\Adapter\\Cache\\Clearer\\SymfonyCacheClearer'] ?? $container->load('getSymfonyCacheClearerService')), ($container->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] ??= new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer())]);
    }
}
