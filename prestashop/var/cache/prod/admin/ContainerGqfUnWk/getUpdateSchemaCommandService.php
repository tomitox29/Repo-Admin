<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateSchemaCommandService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Command\UpdateSchemaCommand' shared service.
     *
     * @return \PrestaShopBundle\Command\UpdateSchemaCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShopBundle\\Command\\UpdateSchemaCommand'] = new \PrestaShopBundle\Command\UpdateSchemaCommand('prestashop', 'ps_', ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
