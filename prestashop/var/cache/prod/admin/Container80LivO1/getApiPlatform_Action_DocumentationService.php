<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_DocumentationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'api_platform.action.documentation' shared service.
     *
     * @return \ApiPlatform\Documentation\Action\DocumentationAction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['api_platform.action.documentation'] = new \ApiPlatform\Documentation\Action\DocumentationAction(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), '', '', '0.0.0', NULL, ($container->privates['api_platform.state_provider.content_negotiation'] ?? $container->load('getApiPlatform_StateProvider_ContentNegotiationService')), ($container->privates['api_platform.state_processor.write'] ?? $container->load('getApiPlatform_StateProcessor_WriteService')), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.docs_formats']);
    }
}
