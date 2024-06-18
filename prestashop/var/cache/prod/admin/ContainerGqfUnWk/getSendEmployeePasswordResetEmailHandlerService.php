<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendEmployeePasswordResetEmailHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\SendEmployeePasswordResetEmailHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\SendEmployeePasswordResetEmailHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShopBundle\\Security\\Admin\\EmployeePasswordResetter'] ?? $container->load('getEmployeePasswordResetterService'));

        if (isset($container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\CommandHandler\\SendEmployeePasswordResetEmailHandler'])) {
            return $container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\CommandHandler\\SendEmployeePasswordResetEmailHandler'];
        }

        return $container->services['PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\CommandHandler\\SendEmployeePasswordResetEmailHandler'] = new \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\SendEmployeePasswordResetEmailHandler($a);
    }
}
