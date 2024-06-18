<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyInfo_SerializerExtractorService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($container->privates['api_platform.serializer.mapping.cache_class_metadata_factory'] ?? self::getApiPlatform_Serializer_Mapping_CacheClassMetadataFactoryService($container)));
    }
}
