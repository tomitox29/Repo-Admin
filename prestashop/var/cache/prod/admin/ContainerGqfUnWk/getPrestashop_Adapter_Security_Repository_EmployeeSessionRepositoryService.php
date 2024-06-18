<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Security_Repository_EmployeeSessionRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.security.repository.employee_session_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Session\Repository\EmployeeSessionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.security.repository.employee_session_repository'] = new \PrestaShop\PrestaShop\Adapter\Session\Repository\EmployeeSessionRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_COOKIE_LIFETIME_BO"));
    }
}
