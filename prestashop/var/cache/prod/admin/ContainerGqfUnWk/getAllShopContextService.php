<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAllShopContextService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Attribute\AllShopContext' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Attribute\AllShopContext
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShopBundle\\Controller\\Attribute\\AllShopContext'] = new \PrestaShopBundle\Controller\Attribute\AllShopContext();
    }
}
