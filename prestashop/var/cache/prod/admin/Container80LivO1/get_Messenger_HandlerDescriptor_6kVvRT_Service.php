<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_6kVvRT_Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.6kVvRT.' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.6kVvRT.'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\HttpClient\Messenger\PingWebhookMessageHandler(($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService'))), []);
    }
}
