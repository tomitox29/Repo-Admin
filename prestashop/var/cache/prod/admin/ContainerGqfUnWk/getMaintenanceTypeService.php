<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaintenanceTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Configure\ShopParameters\General\MaintenanceType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\ShopParameters\General\MaintenanceType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\General\\MaintenanceType'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\General\MaintenanceType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())->getCurrentRequest()->getClientIp());
    }
}
