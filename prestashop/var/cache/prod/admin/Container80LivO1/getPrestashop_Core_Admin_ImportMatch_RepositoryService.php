<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Admin_ImportMatch_RepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.admin.import_match.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\ImportMatchRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.admin.import_match.repository'] = new \PrestaShopBundle\Entity\Repository\ImportMatchRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_');
    }
}
