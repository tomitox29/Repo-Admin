<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarrierRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Carrier\\Repository\\CarrierRepository'] = new \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository();
    }
}
