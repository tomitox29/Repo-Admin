<?php

namespace Container80LivO1;

class ModuleRepositoryGhostE5bd087 extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adminModuleDataProvider' => [parent::class, 'adminModuleDataProvider', null],
        "\0".parent::class."\0".'cacheProvider' => [parent::class, 'cacheProvider', null],
        "\0".parent::class."\0".'contextLangId' => [parent::class, 'contextLangId', null],
        "\0".parent::class."\0".'hookManager' => [parent::class, 'hookManager', null],
        "\0".parent::class."\0".'installedModules' => [parent::class, 'installedModules', null],
        "\0".parent::class."\0".'moduleDataProvider' => [parent::class, 'moduleDataProvider', null],
        "\0".parent::class."\0".'modulePath' => [parent::class, 'modulePath', null],
        "\0".parent::class."\0".'modulesFromHook' => [parent::class, 'modulesFromHook', null],
        'adminModuleDataProvider' => [parent::class, 'adminModuleDataProvider', null],
        'cacheProvider' => [parent::class, 'cacheProvider', null],
        'contextLangId' => [parent::class, 'contextLangId', null],
        'hookManager' => [parent::class, 'hookManager', null],
        'installedModules' => [parent::class, 'installedModules', null],
        'moduleDataProvider' => [parent::class, 'moduleDataProvider', null],
        'modulePath' => [parent::class, 'modulePath', null],
        'modulesFromHook' => [parent::class, 'modulesFromHook', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ModuleRepositoryGhostE5bd087', false)) {
    \class_alias(__NAMESPACE__.'\\ModuleRepositoryGhostE5bd087', 'ModuleRepositoryGhostE5bd087', false);
}
