<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Routes_RouteValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.routes.route_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Routes\RouteValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.routes.route_validator'] = new \PrestaShop\PrestaShop\Adapter\Routes\RouteValidator();
    }
}
