<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeoCoordinatesTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Type\GeoCoordinatesType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\GeoCoordinatesType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Type\\GeoCoordinatesType'] = new \PrestaShopBundle\Form\Admin\Type\GeoCoordinatesType(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
