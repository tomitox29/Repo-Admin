<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContext_StaticService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'context.static' shared service.
     *
     * @return \Context
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['context.static'] = new \Context();
    }
}
