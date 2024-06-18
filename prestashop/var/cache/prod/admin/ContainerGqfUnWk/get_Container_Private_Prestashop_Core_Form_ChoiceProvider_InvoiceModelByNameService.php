<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Form_ChoiceProvider_InvoiceModelByNameService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.form.choice_provider.invoice_model_by_name' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\InvoiceModelByNameChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.form.choice_provider.invoice_model_by_name'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\InvoiceModelByNameChoiceProvider(($container->services['prestashop.core.file.cached_finder.invoice_model'] ?? $container->load('getPrestashop_Core_File_CachedFinder_InvoiceModelService')));
    }
}