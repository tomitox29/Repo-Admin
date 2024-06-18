<?php

namespace Container80LivO1;

class ThemeManagerProxy1fa8a34 extends \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'apiClientContext' => [parent::class, 'apiClientContext', parent::class],
        "\0".parent::class."\0".'configuration' => [parent::class, 'configuration', parent::class],
        "\0".parent::class."\0".'employee' => [parent::class, 'employee', parent::class],
        "\0".parent::class."\0".'filesystem' => [parent::class, 'filesystem', parent::class],
        "\0".parent::class."\0".'finder' => [parent::class, 'finder', null],
        "\0".parent::class."\0".'hookConfigurator' => [parent::class, 'hookConfigurator', parent::class],
        "\0".parent::class."\0".'imageTypeRepository' => [parent::class, 'imageTypeRepository', parent::class],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', parent::class],
        "\0".parent::class."\0".'shop' => [parent::class, 'shop', null],
        "\0".parent::class."\0".'themeRepository' => [parent::class, 'themeRepository', parent::class],
        "\0".parent::class."\0".'themeValidator' => [parent::class, 'themeValidator', parent::class],
        "\0".parent::class."\0".'translationFinder' => [parent::class, 'translationFinder', parent::class],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', parent::class],
        'apiClientContext' => [parent::class, 'apiClientContext', parent::class],
        'configuration' => [parent::class, 'configuration', parent::class],
        'employee' => [parent::class, 'employee', parent::class],
        'filesystem' => [parent::class, 'filesystem', parent::class],
        'finder' => [parent::class, 'finder', null],
        'hookConfigurator' => [parent::class, 'hookConfigurator', parent::class],
        'imageTypeRepository' => [parent::class, 'imageTypeRepository', parent::class],
        'logger' => [parent::class, 'logger', parent::class],
        'sandbox' => [parent::class, 'sandbox', null],
        'shop' => [parent::class, 'shop', null],
        'themeRepository' => [parent::class, 'themeRepository', parent::class],
        'themeValidator' => [parent::class, 'themeValidator', parent::class],
        'translationFinder' => [parent::class, 'translationFinder', parent::class],
        'translator' => [parent::class, 'translator', parent::class],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ThemeManagerProxy1fa8a34', false)) {
    \class_alias(__NAMESPACE__.'\\ThemeManagerProxy1fa8a34', 'ThemeManagerProxy1fa8a34', false);
}
