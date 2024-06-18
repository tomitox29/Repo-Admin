<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMeHandler_MainService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.remember_me_handler.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShopBundle\\Security\\Admin\\EmployeeProvider'] ?? self::getEmployeeProviderService($container));

        if (isset($container->privates['security.authenticator.remember_me_handler.main'])) {
            return $container->privates['security.authenticator.remember_me_handler.main'];
        }

        return $container->privates['security.authenticator.remember_me_handler.main'] = new \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler(new \Symfony\Component\Security\Core\Signature\SignatureHasher(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ['password'], 'jxJ7DBh6XqVnAJ5R43D8GHNKAWkX8Thd0I3qwm3wFOoxk18kp2mYsXqvqbmaSQMk', NULL, NULL), $a, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ['secret' => 'jxJ7DBh6XqVnAJ5R43D8GHNKAWkX8Thd0I3qwm3wFOoxk18kp2mYsXqvqbmaSQMk', 'lifetime' => 3600, 'remember_me_parameter' => 'stay_logged_in', 'signature_properties' => ['password'], 'user_providers' => [], 'catch_exceptions' => true, 'name' => 'REMEMBERME', 'path' => '/', 'domain' => NULL, 'secure' => NULL, 'httponly' => true, 'samesite' => NULL, 'always_remember_me' => false], ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));
    }
}
