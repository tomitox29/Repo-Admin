<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchFormService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Twig\Component\SearchForm' autowired service.
     *
     * @return \PrestaShopBundle\Twig\Component\SearchForm
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\SearchForm'] = function ($container) {
            return new \PrestaShopBundle\Twig\Component\SearchForm(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
        };

        return $container->factories['service_container']['PrestaShopBundle\\Twig\\Component\\SearchForm']($container);
    }
}