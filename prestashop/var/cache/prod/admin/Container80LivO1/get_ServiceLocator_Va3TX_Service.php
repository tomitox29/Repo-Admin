<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Va3TX_Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.service_locator.va_3TX.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.va_3TX.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'creditSlipFilters' => ['privates', '.errored..service_locator.va_3TX..PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CreditSlipFilters', NULL, 'Cannot autowire service ".service_locator.va_3TX.": it references class "PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CreditSlipFilters" but no such service exists.'],
        ], [
            'creditSlipFilters' => 'PrestaShop\\PrestaShop\\Core\\Search\\Filters\\CreditSlipFilters',
        ]);
    }
}