<?php

namespace Container80LivO1;

class QueryLayerGhost96f4da2 extends \PrestaShop\PrestaShop\Core\FeatureFlag\Layer\QueryLayer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'environment' => [parent::class, 'environment', null],
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', null],
        'environment' => [parent::class, 'environment', null],
        'requestStack' => [parent::class, 'requestStack', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('QueryLayerGhost96f4da2', false)) {
    \class_alias(__NAMESPACE__.'\\QueryLayerGhost96f4da2', 'QueryLayerGhost96f4da2', false);
}