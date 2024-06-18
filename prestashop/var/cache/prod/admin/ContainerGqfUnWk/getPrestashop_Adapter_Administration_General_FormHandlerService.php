<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Administration_General_FormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.administration.general.form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\Handler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.administration.general.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.adapter.administration.general.form_provider'] ?? $container->load('getPrestashop_Adapter_Administration_General_FormProviderService')), 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\GeneralType', 'AdministrationPageGeneral', 'general');
    }
}
