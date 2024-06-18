<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Security_PasswordPolicy_FormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.security.password_policy.form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\Handler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.security.password_policy.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.adapter.security.password_policy.form_provider'] ?? $container->load('getPrestashop_Adapter_Security_PasswordPolicy_FormProviderService')), 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Security\\PasswordPolicyType', 'SecurityPagePasswordPolicy', 'password_policy');
    }
}
