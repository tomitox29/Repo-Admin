<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslationCacheClearerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Cache\TranslationCacheClearer' shared autowired service.
     *
     * @return \PrestaShopBundle\Cache\TranslationCacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShopBundle\\Cache\\TranslationCacheClearer'] = new \PrestaShopBundle\Cache\TranslationCacheClearer((\dirname(__DIR__, 2).'/'));
    }
}
