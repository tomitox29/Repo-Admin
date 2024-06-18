<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_ExtractorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'fos_js_routing.extractor' shared service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService')), [], $container->targetDir.'', $container->parameters['kernel.bundles']);
    }
}
