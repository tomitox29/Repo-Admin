<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Api_Search_BuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.api.search.builder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Search\Builder\ChainedFiltersBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.core.search.builder.event'] ?? $container->load('getPrestashop_Core_Search_Builder_EventService'));

        if (isset($container->services['prestashop.core.api.search.builder'])) {
            return $container->services['prestashop.core.api.search.builder'];
        }

        return $container->services['prestashop.core.api.search.builder'] = new \PrestaShop\PrestaShop\Core\Search\Builder\ChainedFiltersBuilder([($container->services['prestashop.core.search.builder.typed'] ?? $container->load('getPrestashop_Core_Search_Builder_TypedService')), ($container->services['prestashop.core.search.builder.request'] ??= new \PrestaShop\PrestaShop\Core\Search\Builder\RequestFiltersBuilder()), $a]);
    }
}
