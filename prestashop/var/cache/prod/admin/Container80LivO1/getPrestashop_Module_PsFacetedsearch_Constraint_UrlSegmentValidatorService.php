<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Module_PsFacetedsearch_Constraint_UrlSegmentValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.module.ps_facetedsearch.constraint.url_segment_validator' shared service.
     *
     * @return \PrestaShop\Module\FacetedSearch\Constraint\UrlSegmentValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.module.ps_facetedsearch.constraint.url_segment_validator'] = new \PrestaShop\Module\FacetedSearch\Constraint\UrlSegmentValidator(($container->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ??= new \PrestaShop\PrestaShop\Adapter\Tools()));
    }
}
