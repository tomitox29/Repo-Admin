<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (isset($container->privates['cache.validator'])) {
                yield 'cache.validator' => ($container->privates['cache.validator'] ?? null);
            }
            if (isset($container->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? null);
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (isset($container->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($container->privates['http_client.transport'])) {
                yield 'http_client.transport' => ($container->privates['http_client.transport'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->privates['translation.locale_switcher'])) {
                yield 'translation.locale_switcher' => ($container->privates['translation.locale_switcher'] ?? null);
            }
            if (isset($container->privates['array'])) {
                yield 'array' => ($container->privates['array'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($container->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (false) {
                yield 'messenger.transport.in_memory.factory' => null;
            }
            if (isset($container->privates['security.token_storage'])) {
                yield 'security.token_storage' => ($container->privates['security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($container->services['cache.security_is_granted_attribute_expression_language'])) {
                yield 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? null);
            }
            if (false) {
                yield 'cache.security_token_verifier' => null;
            }
            if (isset($container->privates['twig.form.engine'])) {
                yield 'twig.form.engine' => ($container->privates['twig.form.engine'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($container->privates['monolog.handler.console'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (isset($container->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($container->privates['form.type.entity'] ?? null);
            }
            if (false) {
                yield 'api_platform.cache.route_name_resolver' => null;
            }
            if (isset($container->privates['api_platform.cache.metadata.resource'])) {
                yield 'api_platform.cache.metadata.resource' => ($container->privates['api_platform.cache.metadata.resource'] ?? null);
            }
            if (isset($container->privates['api_platform.cache.metadata.property'])) {
                yield 'api_platform.cache.metadata.property' => ($container->privates['api_platform.cache.metadata.property'] ?? null);
            }
            if (isset($container->privates['api_platform.cache.metadata.resource_collection'])) {
                yield 'api_platform.cache.metadata.resource_collection' => ($container->privates['api_platform.cache.metadata.resource_collection'] ?? null);
            }
            if (isset($container->services['PrestaShop\\PrestaShop\\Core\\FeatureFlag\\FeatureFlagStateCheckerInterface'])) {
                yield 'PrestaShop\\PrestaShop\\Core\\FeatureFlag\\FeatureFlagManager' => ($container->services['PrestaShop\\PrestaShop\\Core\\FeatureFlag\\FeatureFlagStateCheckerInterface'] ?? null);
            }
        }, fn () => 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (isset($container->privates['cache.validator'])) + (int) (isset($container->privates['cache.serializer'])) + (int) (isset($container->privates['cache.annotations'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (isset($container->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($container->privates['http_client.transport'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->privates['translation.locale_switcher'])) + (int) (isset($container->privates['array'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->privates['form.choice_list_factory.cached'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (false) + (int) (isset($container->privates['security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language'])) + (int) (isset($container->services['cache.security_is_granted_attribute_expression_language'])) + (int) (false) + (int) (isset($container->privates['twig.form.engine'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->privates['monolog.handler.console'])) + (int) (isset($container->services['doctrine'])) + (int) (isset($container->privates['form.type.entity'])) + (int) (false) + (int) (isset($container->privates['api_platform.cache.metadata.resource'])) + (int) (isset($container->privates['api_platform.cache.metadata.property'])) + (int) (isset($container->privates['api_platform.cache.metadata.resource_collection'])) + (int) (isset($container->services['PrestaShop\\PrestaShop\\Core\\FeatureFlag\\FeatureFlagStateCheckerInterface']))), ['cache.app' => ['reset'], 'cache.system' => ['reset'], 'cache.validator' => ['reset'], 'cache.serializer' => ['reset'], 'cache.annotations' => ['reset'], 'cache.property_info' => ['reset'], 'cache.messenger.restart_workers_signal' => ['reset'], 'http_client.transport' => ['?reset'], 'mailer.message_logger_listener' => ['reset'], 'translation.locale_switcher' => ['reset'], 'array' => ['reset'], 'session_listener' => ['reset'], 'form.choice_list_factory.cached' => ['reset'], 'cache.validator_expression_language' => ['reset'], 'messenger.transport.in_memory.factory' => ['reset'], 'security.token_storage' => ['disableUsageTracking', 'setToken'], 'cache.security_expression_language' => ['reset'], 'cache.security_is_granted_attribute_expression_language' => ['reset'], 'cache.security_token_verifier' => ['reset'], 'twig.form.engine' => ['reset'], 'monolog.handler.main' => ['reset'], 'monolog.handler.console' => ['reset'], 'doctrine' => ['reset'], 'form.type.entity' => ['reset'], 'api_platform.cache.route_name_resolver' => ['reset'], 'api_platform.cache.metadata.resource' => ['reset'], 'api_platform.cache.metadata.property' => ['reset'], 'api_platform.cache.metadata.resource_collection' => ['reset'], 'PrestaShop\\PrestaShop\\Core\\FeatureFlag\\FeatureFlagManager' => ['reset']]);
    }
}