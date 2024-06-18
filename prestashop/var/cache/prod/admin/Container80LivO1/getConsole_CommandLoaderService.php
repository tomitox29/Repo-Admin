<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'console.command.about' => ['privates', '.console.command.about.lazy', 'get_Console_Command_About_LazyService', true],
            'console.command.assets_install' => ['privates', '.console.command.assets_install.lazy', 'get_Console_Command_AssetsInstall_LazyService', true],
            'console.command.cache_clear' => ['privates', '.console.command.cache_clear.lazy', 'get_Console_Command_CacheClear_LazyService', true],
            'console.command.cache_pool_clear' => ['privates', '.console.command.cache_pool_clear.lazy', 'get_Console_Command_CachePoolClear_LazyService', true],
            'console.command.cache_pool_prune' => ['privates', '.console.command.cache_pool_prune.lazy', 'get_Console_Command_CachePoolPrune_LazyService', true],
            'console.command.cache_pool_invalidate_tags' => ['privates', '.console.command.cache_pool_invalidate_tags.lazy', 'get_Console_Command_CachePoolInvalidateTags_LazyService', true],
            'console.command.cache_pool_delete' => ['privates', '.console.command.cache_pool_delete.lazy', 'get_Console_Command_CachePoolDelete_LazyService', true],
            'console.command.cache_pool_list' => ['privates', '.console.command.cache_pool_list.lazy', 'get_Console_Command_CachePoolList_LazyService', true],
            'console.command.cache_warmup' => ['privates', '.console.command.cache_warmup.lazy', 'get_Console_Command_CacheWarmup_LazyService', true],
            'console.command.config_debug' => ['privates', '.console.command.config_debug.lazy', 'get_Console_Command_ConfigDebug_LazyService', true],
            'console.command.config_dump_reference' => ['privates', '.console.command.config_dump_reference.lazy', 'get_Console_Command_ConfigDumpReference_LazyService', true],
            'console.command.container_debug' => ['privates', '.console.command.container_debug.lazy', 'get_Console_Command_ContainerDebug_LazyService', true],
            'console.command.container_lint' => ['privates', '.console.command.container_lint.lazy', 'get_Console_Command_ContainerLint_LazyService', true],
            'console.command.debug_autowiring' => ['privates', '.console.command.debug_autowiring.lazy', 'get_Console_Command_DebugAutowiring_LazyService', true],
            'console.command.dotenv_debug' => ['privates', '.console.command.dotenv_debug.lazy', 'get_Console_Command_DotenvDebug_LazyService', true],
            'console.command.event_dispatcher_debug' => ['privates', '.console.command.event_dispatcher_debug.lazy', 'get_Console_Command_EventDispatcherDebug_LazyService', true],
            'console.command.messenger_consume_messages' => ['privates', '.console.command.messenger_consume_messages.lazy', 'get_Console_Command_MessengerConsumeMessages_LazyService', true],
            'console.command.messenger_setup_transports' => ['privates', '.console.command.messenger_setup_transports.lazy', 'get_Console_Command_MessengerSetupTransports_LazyService', true],
            'console.command.messenger_debug' => ['privates', '.console.command.messenger_debug.lazy', 'get_Console_Command_MessengerDebug_LazyService', true],
            'console.command.messenger_stop_workers' => ['privates', '.console.command.messenger_stop_workers.lazy', 'get_Console_Command_MessengerStopWorkers_LazyService', true],
            'console.command.messenger_stats' => ['privates', '.console.command.messenger_stats.lazy', 'get_Console_Command_MessengerStats_LazyService', true],
            'console.command.router_debug' => ['privates', '.console.command.router_debug.lazy', 'get_Console_Command_RouterDebug_LazyService', true],
            'console.command.router_match' => ['privates', '.console.command.router_match.lazy', 'get_Console_Command_RouterMatch_LazyService', true],
            'console.command.serializer_debug' => ['privates', '.console.command.serializer_debug.lazy', 'get_Console_Command_SerializerDebug_LazyService', true],
            'console.command.translation_debug' => ['privates', '.console.command.translation_debug.lazy', 'get_Console_Command_TranslationDebug_LazyService', true],
            'console.command.translation_extract' => ['privates', '.console.command.translation_extract.lazy', 'get_Console_Command_TranslationExtract_LazyService', true],
            'console.command.validator_debug' => ['privates', '.console.command.validator_debug.lazy', 'get_Console_Command_ValidatorDebug_LazyService', true],
            'console.command.translation_pull' => ['privates', '.console.command.translation_pull.lazy', 'get_Console_Command_TranslationPull_LazyService', true],
            'console.command.translation_push' => ['privates', '.console.command.translation_push.lazy', 'get_Console_Command_TranslationPush_LazyService', true],
            'console.command.xliff_lint' => ['privates', '.console.command.xliff_lint.lazy', 'get_Console_Command_XliffLint_LazyService', true],
            'console.command.yaml_lint' => ['privates', '.console.command.yaml_lint.lazy', 'get_Console_Command_YamlLint_LazyService', true],
            'console.command.form_debug' => ['privates', '.console.command.form_debug.lazy', 'get_Console_Command_FormDebug_LazyService', true],
            'console.command.secrets_set' => ['privates', '.console.command.secrets_set.lazy', 'get_Console_Command_SecretsSet_LazyService', true],
            'console.command.secrets_remove' => ['privates', '.console.command.secrets_remove.lazy', 'get_Console_Command_SecretsRemove_LazyService', true],
            'console.command.secrets_generate_key' => ['privates', '.console.command.secrets_generate_key.lazy', 'get_Console_Command_SecretsGenerateKey_LazyService', true],
            'console.command.secrets_list' => ['privates', '.console.command.secrets_list.lazy', 'get_Console_Command_SecretsList_LazyService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', '.console.command.secrets_decrypt_to_local.lazy', 'get_Console_Command_SecretsDecryptToLocal_LazyService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', '.console.command.secrets_encrypt_from_local.lazy', 'get_Console_Command_SecretsEncryptFromLocal_LazyService', true],
            'console.command.mailer_test' => ['privates', '.console.command.mailer_test.lazy', 'get_Console_Command_MailerTest_LazyService', true],
            'security.command.debug_firewall' => ['privates', '.security.command.debug_firewall.lazy', 'get_Security_Command_DebugFirewall_LazyService', true],
            'security.command.user_password_hash' => ['privates', '.security.command.user_password_hash.lazy', 'get_Security_Command_UserPasswordHash_LazyService', true],
            'twig.command.debug' => ['privates', '.twig.command.debug.lazy', 'get_Twig_Command_Debug_LazyService', true],
            'twig.command.lint' => ['privates', '.twig.command.lint.lazy', 'get_Twig_Command_Lint_LazyService', true],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', true],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', true],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', true],
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', true],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', true],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', true],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', true],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', true],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', true],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', true],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', true],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', true],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', true],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', true],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', true],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', true],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', true],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', true],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', true],
            'api_platform.json_schema.json_schema_generate_command' => ['privates', 'api_platform.json_schema.json_schema_generate_command', 'getApiPlatform_JsonSchema_JsonSchemaGenerateCommandService', true],
            'PrestaShopBundle\\Command\\FeatureFlagCommand' => ['services', 'PrestaShopBundle\\Command\\FeatureFlagCommand', 'getFeatureFlagCommandService', true],
            'fos_js_routing.dump_command' => ['privates', '.fos_js_routing.dump_command.lazy', 'get_FosJsRouting_DumpCommand_LazyService', true],
            'fos_js_routing.router_debug_exposed_command' => ['privates', '.fos_js_routing.router_debug_exposed_command.lazy', 'get_FosJsRouting_RouterDebugExposedCommand_LazyService', true],
            'ux.twig_component.command.debug' => ['privates', '.ux.twig_component.command.debug.lazy', 'get_Ux_TwigComponent_Command_Debug_LazyService', true],
            '.ux_icons.command.warm_cache' => ['privates', '..ux_icons.command.warm_cache.lazy', 'get__UxIcons_Command_WarmCache_LazyService', true],
            '.ux_icons.command.lock' => ['privates', '..ux_icons.command.lock.lazy', 'get__UxIcons_Command_Lock_LazyService', true],
            '.ux_icons.command.search' => ['privates', '..ux_icons.command.search.lazy', 'get__UxIcons_Command_Search_LazyService', true],
        ], [
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_pool_invalidate_tags' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.dotenv_debug' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.messenger_consume_messages' => '?',
            'console.command.messenger_setup_transports' => '?',
            'console.command.messenger_debug' => '?',
            'console.command.messenger_stop_workers' => '?',
            'console.command.messenger_stats' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.serializer_debug' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_extract' => '?',
            'console.command.validator_debug' => '?',
            'console.command.translation_pull' => '?',
            'console.command.translation_push' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'console.command.form_debug' => '?',
            'console.command.secrets_set' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.mailer_test' => '?',
            'security.command.debug_firewall' => '?',
            'security.command.user_password_hash' => '?',
            'twig.command.debug' => '?',
            'twig.command.lint' => '?',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'api_platform.json_schema.json_schema_generate_command' => 'ApiPlatform\\JsonSchema\\Command\\JsonSchemaGenerateCommand',
            'PrestaShopBundle\\Command\\FeatureFlagCommand' => 'PrestaShopBundle\\Command\\FeatureFlagCommand',
            'fos_js_routing.dump_command' => '?',
            'fos_js_routing.router_debug_exposed_command' => '?',
            'ux.twig_component.command.debug' => '?',
            '.ux_icons.command.warm_cache' => '?',
            '.ux_icons.command.lock' => '?',
            '.ux_icons.command.search' => '?',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:invalidate-tags' => 'console.command.cache_pool_invalidate_tags', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:dotenv' => 'console.command.dotenv_debug', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume' => 'console.command.messenger_consume_messages', 'messenger:setup-transports' => 'console.command.messenger_setup_transports', 'debug:messenger' => 'console.command.messenger_debug', 'messenger:stop-workers' => 'console.command.messenger_stop_workers', 'messenger:stats' => 'console.command.messenger_stats', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:serializer' => 'console.command.serializer_debug', 'debug:translation' => 'console.command.translation_debug', 'translation:extract' => 'console.command.translation_extract', 'debug:validator' => 'console.command.validator_debug', 'translation:pull' => 'console.command.translation_pull', 'translation:push' => 'console.command.translation_push', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'mailer:test' => 'console.command.mailer_test', 'debug:firewall' => 'security.command.debug_firewall', 'security:hash-password' => 'security.command.user_password_hash', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'api:json-schema:generate' => 'api_platform.json_schema.json_schema_generate_command', 'prestashop:feature-flag' => 'PrestaShopBundle\\Command\\FeatureFlagCommand', 'fos:js-routing:dump' => 'fos_js_routing.dump_command', 'fos:js-routing:debug' => 'fos_js_routing.router_debug_exposed_command', 'debug:twig-component' => 'ux.twig_component.command.debug', 'ux:icons:warm-cache' => '.ux_icons.command.warm_cache', 'ux:icons:lock' => '.ux_icons.command.lock', 'ux:icons:search' => '.ux_icons.command.search']);
    }
}