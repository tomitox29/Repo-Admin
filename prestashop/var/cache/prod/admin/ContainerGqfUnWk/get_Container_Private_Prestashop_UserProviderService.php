<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_UserProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.user_provider' shared autowired service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\UserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.user_provider'] = new \PrestaShopBundle\Service\DataProvider\UserProvider(($container->privates['security.helper'] ?? self::getSecurity_HelperService($container)));
    }
}
