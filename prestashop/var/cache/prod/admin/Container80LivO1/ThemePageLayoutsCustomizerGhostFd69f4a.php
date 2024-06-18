<?php

namespace Container80LivO1;

class ThemePageLayoutsCustomizerGhostFd69f4a extends \PrestaShop\PrestaShop\Core\Addon\Theme\ThemePageLayoutsCustomizer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'smartyCacheClearer' => [parent::class, 'smartyCacheClearer', null],
        "\0".parent::class."\0".'theme' => [parent::class, 'theme', null],
        "\0".parent::class."\0".'themeManager' => [parent::class, 'themeManager', null],
        'smartyCacheClearer' => [parent::class, 'smartyCacheClearer', null],
        'theme' => [parent::class, 'theme', null],
        'themeManager' => [parent::class, 'themeManager', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ThemePageLayoutsCustomizerGhostFd69f4a', false)) {
    \class_alias(__NAMESPACE__.'\\ThemePageLayoutsCustomizerGhostFd69f4a', 'ThemePageLayoutsCustomizerGhostFd69f4a', false);
}
