<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Form_ChoiceProvider_CustomerThreadStatusesChoiceProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.form.choice_provider.customer_thread_statuses_choice_provider' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CustomerThreadStatusesChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.form.choice_provider.customer_thread_statuses_choice_provider'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CustomerThreadStatusesChoiceProvider(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
