<?php

namespace Container80LivO1;

class DotEnvLayerGhostC7a9172 extends \PrestaShop\PrestaShop\Core\FeatureFlag\Layer\DotEnvLayer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'environment' => [parent::class, 'environment', null],
        "\0".parent::class."\0".'rootDir' => [parent::class, 'rootDir', null],
        'environment' => [parent::class, 'environment', null],
        'rootDir' => [parent::class, 'rootDir', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DotEnvLayerGhostC7a9172', false)) {
    \class_alias(__NAMESPACE__.'\\DotEnvLayerGhostC7a9172', 'DotEnvLayerGhostC7a9172', false);
}
