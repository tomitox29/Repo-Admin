<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Array_TaggableService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.array.taggable' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.array.taggable'] = new \Symfony\Component\Cache\Adapter\TagAwareAdapter(($container->privates['array'] ?? self::getArrayService($container)));
    }
}
