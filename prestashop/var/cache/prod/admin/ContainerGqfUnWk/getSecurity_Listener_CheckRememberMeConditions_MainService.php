<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CheckRememberMeConditions_MainService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'security.listener.check_remember_me_conditions.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.check_remember_me_conditions.main'] = new \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener(['remember_me_parameter' => 'stay_logged_in', 'always_remember_me' => false], ($container->services['logger'] ?? self::getLoggerService($container)));
    }
}
