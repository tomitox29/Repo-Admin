<?php

namespace ContainerGqfUnWk;

class LegacyControllerContextProxy8391cd6 extends \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'container' => [parent::class, 'container', parent::class],
        'className' => [parent::class, 'className', parent::class],
        'confirmations' => [parent::class, 'confirmations', null],
        'container' => [parent::class, 'container', parent::class],
        'controller_name' => [parent::class, 'controller_name', parent::class],
        'controller_type' => [parent::class, 'controller_type', parent::class],
        'css_files' => [parent::class, 'css_files', null],
        'currentIndex' => [parent::class, 'currentIndex', parent::class],
        'errors' => [parent::class, 'errors', null],
        'id' => [parent::class, 'id', parent::class],
        'imageType' => [parent::class, 'imageType', null],
        'informations' => [parent::class, 'informations', null],
        'js_files' => [parent::class, 'js_files', null],
        'multishop_context' => [parent::class, 'multishop_context', parent::class],
        'override_folder' => [parent::class, 'override_folder', parent::class],
        'page_header_toolbar_btn' => [parent::class, 'page_header_toolbar_btn', null],
        'php_self' => [parent::class, 'php_self', parent::class],
        'table' => [parent::class, 'table', parent::class],
        'token' => [parent::class, 'token', parent::class],
        'warnings' => [parent::class, 'warnings', null],
    ];
    public function addCSS($css_uri, $css_media_type = 'all', $offset = null, $check_path = true): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addCSS(...\func_get_args());
        } else {
            parent::addCSS(...\func_get_args());
        }
    }
    public function addJS($js_uri, $check_path = true): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addJS(...\func_get_args());
        } else {
            parent::addJS(...\func_get_args());
        }
    }
    public function getContainer(): \Symfony\Component\DependencyInjection\ContainerInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getContainer(...\func_get_args());
        }
        return parent::getContainer(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('LegacyControllerContextProxy8391cd6', false)) {
    \class_alias(__NAMESPACE__.'\\LegacyControllerContextProxy8391cd6', 'LegacyControllerContextProxy8391cd6', false);
}
