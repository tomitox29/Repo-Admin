<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetSpecificPriceForEditingHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\QueryHandler\GetSpecificPriceForEditingHandler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\QueryHandler\GetSpecificPriceForEditingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\QueryHandler\\GetSpecificPriceForEditingHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\QueryHandler\GetSpecificPriceForEditingHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\Repository\\SpecificPriceRepository'] ?? $container->load('getSpecificPriceRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Customer\\Repository\\CustomerRepository'] ??= new \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository()));
    }
}