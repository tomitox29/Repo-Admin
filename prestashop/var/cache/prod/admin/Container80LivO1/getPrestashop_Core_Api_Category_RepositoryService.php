<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Api_Category_RepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.api.category.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\CategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.api.category.repository'] = new \PrestaShopBundle\Entity\Repository\CategoryRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)), 'ps_');
    }
}
