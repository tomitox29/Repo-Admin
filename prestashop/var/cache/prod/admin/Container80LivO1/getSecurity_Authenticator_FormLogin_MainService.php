<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_MainService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.form_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.authenticator.form_login.main'])) {
            return $container->privates['security.authenticator.form_login.main'];
        }
        $b = ($container->services['PrestaShopBundle\\Security\\Admin\\EmployeeHomepageProvider'] ?? $container->load('getEmployeeHomepageProviderService'));

        if (isset($container->privates['security.authenticator.form_login.main'])) {
            return $container->privates['security.authenticator.form_login.main'];
        }
        $c = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['security.authenticator.form_login.main'])) {
            return $container->privates['security.authenticator.form_login.main'];
        }
        $d = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['security.authenticator.form_login.main'])) {
            return $container->privates['security.authenticator.form_login.main'];
        }
        $e = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($d, $a, [], ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));
        $e->setOptions(['login_path' => 'admin_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.form_login.main'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($a, ($container->services['PrestaShopBundle\\Security\\Admin\\EmployeeProvider'] ?? self::getEmployeeProviderService($container)), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \PrestaShopBundle\Security\Admin\AdminAuthenticationSuccessHandler($b, $c), ['login_path' => 'admin_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false], 'main'), $e, ['login_path' => 'admin_login', 'check_path' => 'admin_login', 'username_parameter' => 'email', 'password_parameter' => 'passwd', 'use_forward' => false, 'require_previous_session' => false, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true, 'form_only' => false]);
    }
}