<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetCarrierForEditingHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Carrier\QueryHandler\GetCarrierForEditingHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Carrier\QueryHandler\GetCarrierForEditingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Carrier\\QueryHandler\\GetCarrierForEditingHandler'] = new \PrestaShop\PrestaShop\Adapter\Carrier\QueryHandler\GetCarrierForEditingHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Carrier\\Repository\\CarrierRepository'] ??= new \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository()));
    }
}
