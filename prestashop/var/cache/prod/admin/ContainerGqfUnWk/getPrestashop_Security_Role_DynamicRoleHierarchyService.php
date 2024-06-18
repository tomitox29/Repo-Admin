<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Security_Role_DynamicRoleHierarchyService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.security.role.dynamic_role_hierarchy' shared service.
     *
     * @return \PrestaShopBundle\Security\Role\DynamicRoleHierarchy
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.security.role.dynamic_role_hierarchy'] = new \PrestaShopBundle\Security\Role\DynamicRoleHierarchy();
    }
}
