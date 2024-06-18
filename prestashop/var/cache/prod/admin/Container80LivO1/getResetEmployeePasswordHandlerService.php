<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetEmployeePasswordHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\ResetEmployeePasswordHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\ResetEmployeePasswordHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShopBundle\\Security\\Admin\\EmployeePasswordResetter'] ?? $container->load('getEmployeePasswordResetterService'));

        if (isset($container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\CommandHandler\\ResetEmployeePasswordHandler'])) {
            return $container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\CommandHandler\\ResetEmployeePasswordHandler'];
        }

        return $container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\CommandHandler\\ResetEmployeePasswordHandler'] = new \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\ResetEmployeePasswordHandler($a);
    }
}