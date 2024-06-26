<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_FeatureFlags_BetaFormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.feature_flags.beta_form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\Handler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.admin.feature_flags.beta_form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.admin.configure.advanced_parameters.beta_feature_flags_form_data_provider'] ?? $container->load('getPrestashop_Admin_Configure_AdvancedParameters_BetaFeatureFlagsFormDataProviderService')), 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\FeatureFlag\\FeatureFlagListType', 'FeatureFlagBeta', 'feature_flag_beta');
    }
}
