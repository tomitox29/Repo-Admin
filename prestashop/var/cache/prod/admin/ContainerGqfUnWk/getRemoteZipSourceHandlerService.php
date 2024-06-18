<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoteZipSourceHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Core\Module\SourceHandler\RemoteZipSourceHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\SourceHandler\RemoteZipSourceHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Core\\Module\\SourceHandler\\RemoteZipSourceHandler'] = new \PrestaShop\PrestaShop\Core\Module\SourceHandler\RemoteZipSourceHandler(($container->services['PrestaShop\\PrestaShop\\Core\\Module\\SourceHandler\\ZipSourceHandler'] ?? $container->load('getZipSourceHandlerService')), ($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')), (\dirname(__DIR__, 2).'//downloads'));
    }
}
