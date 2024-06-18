<?php

namespace Container80LivO1;

class ModuleSelfConfiguratorGhostC8ac64c extends \PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleSelfConfigurator implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'configFile' => [parent::class, 'configFile', null],
        "\0".'*'."\0".'configs' => [parent::class, 'configs', null],
        "\0".'*'."\0".'configuration' => [parent::class, 'configuration', null],
        "\0".'*'."\0".'connection' => [parent::class, 'connection', null],
        "\0".'*'."\0".'defaultConfigFile' => [parent::class, 'defaultConfigFile', null],
        "\0".'*'."\0".'filesystem' => [parent::class, 'filesystem', null],
        "\0".'*'."\0".'module' => [parent::class, 'module', null],
        "\0".'*'."\0".'moduleRepository' => [parent::class, 'moduleRepository', null],
        'configFile' => [parent::class, 'configFile', null],
        'configs' => [parent::class, 'configs', null],
        'configuration' => [parent::class, 'configuration', null],
        'connection' => [parent::class, 'connection', null],
        'defaultConfigFile' => [parent::class, 'defaultConfigFile', null],
        'filesystem' => [parent::class, 'filesystem', null],
        'module' => [parent::class, 'module', null],
        'moduleRepository' => [parent::class, 'moduleRepository', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ModuleSelfConfiguratorGhostC8ac64c', false)) {
    \class_alias(__NAMESPACE__.'\\ModuleSelfConfiguratorGhostC8ac64c', 'ModuleSelfConfiguratorGhostC8ac64c', false);
}
