<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Foundation_VersionService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.foundation.version' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Foundation\Version
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.foundation.version'] = new \PrestaShop\PrestaShop\Core\Foundation\Version('9.0.0', '9', 9, 0, 0);
    }
}
