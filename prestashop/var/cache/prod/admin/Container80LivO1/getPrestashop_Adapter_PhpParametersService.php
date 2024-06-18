<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_PhpParametersService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.php_parameters' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration\PhpParameters
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.php_parameters'] = new \PrestaShop\PrestaShop\Adapter\Configuration\PhpParameters((\dirname(__DIR__, 5).'/app/config/parameters.php'));
    }
}
