<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Bundle_Repository_ModuleService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.bundle.repository.module' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\ModuleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.bundle.repository.module'] = new \PrestaShopBundle\Entity\Repository\ModuleRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_');
    }
}
