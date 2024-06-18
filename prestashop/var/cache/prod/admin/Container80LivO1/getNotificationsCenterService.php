<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationsCenterService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Twig\Component\NotificationsCenter' autowired service.
     *
     * @return \PrestaShopBundle\Twig\Component\NotificationsCenter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\NotificationsCenter'] = function ($container) {
            $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

            if (isset($container->privates['PrestaShopBundle\\Twig\\Component\\NotificationsCenter'])) {
                return $container->privates['PrestaShopBundle\\Twig\\Component\\NotificationsCenter'];
            }

            return new \PrestaShopBundle\Twig\Component\NotificationsCenter(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)), $a);
        };

        return $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\NotificationsCenter']($container);
    }
}
