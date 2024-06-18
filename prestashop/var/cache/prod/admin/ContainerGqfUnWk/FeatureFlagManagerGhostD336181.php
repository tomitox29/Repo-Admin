<?php

namespace ContainerGqfUnWk;

class FeatureFlagManagerGhostD336181 extends \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagManager implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'featureFlagRepository' => [parent::class, 'featureFlagRepository', parent::class],
        "\0".parent::class."\0".'featureFlagStates' => [parent::class, 'featureFlagStates', null],
        "\0".parent::class."\0".'locator' => [parent::class, 'locator', parent::class],
        'featureFlagRepository' => [parent::class, 'featureFlagRepository', parent::class],
        'featureFlagStates' => [parent::class, 'featureFlagStates', null],
        'locator' => [parent::class, 'locator', parent::class],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('FeatureFlagManagerGhostD336181', false)) {
    \class_alias(__NAMESPACE__.'\\FeatureFlagManagerGhostD336181', 'FeatureFlagManagerGhostD336181', false);
}
