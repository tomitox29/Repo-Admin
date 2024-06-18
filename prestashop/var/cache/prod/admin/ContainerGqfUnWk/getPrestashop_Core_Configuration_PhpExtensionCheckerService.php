<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Configuration_PhpExtensionCheckerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.configuration.php_extension_checker' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Configuration\PhpExtensionChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.configuration.php_extension_checker'] = new \PrestaShop\PrestaShop\Core\Configuration\PhpExtensionChecker();
    }
}
