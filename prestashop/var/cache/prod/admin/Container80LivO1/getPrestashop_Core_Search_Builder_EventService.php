<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Search_Builder_EventService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.search.builder.event' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Search\Builder\EventFiltersBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['prestashop.core.search.builder.event'])) {
            return $container->services['prestashop.core.search.builder.event'];
        }

        return $container->services['prestashop.core.search.builder.event'] = new \PrestaShop\PrestaShop\Core\Search\Builder\EventFiltersBuilder($a);
    }
}
