<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddCountryHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Country\CommandHandler\AddCountryHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CommandHandler\AddCountryHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Country\\CommandHandler\\AddCountryHandler'] = new \PrestaShop\PrestaShop\Adapter\Country\CommandHandler\AddCountryHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Country\\Repository\\CountryRepository'] ?? self::getCountryRepositoryService($container)));
    }
}