<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_SerializeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'api_platform.listener.view.serialize' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\SerializeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.listener.view.serialize'] = new \ApiPlatform\Symfony\EventListener\SerializeListener(($container->privates['serializer'] ?? self::getSerializerService($container)), ($container->privates['api_platform.serializer.context_builder.filter'] ?? self::getApiPlatform_Serializer_ContextBuilder_FilterService($container)), ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)));
    }
}
