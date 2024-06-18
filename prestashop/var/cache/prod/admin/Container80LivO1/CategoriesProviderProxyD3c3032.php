<?php

namespace Container80LivO1;

class CategoriesProviderProxyD3c3032 extends \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'categories' => [parent::class, 'categories', null],
        "\0".parent::class."\0".'categoriesFromSource' => [parent::class, 'categoriesFromSource', null],
        "\0".parent::class."\0".'categoriesMenu' => [parent::class, 'categoriesMenu', null],
        "\0".parent::class."\0".'modulesTheme' => [parent::class, 'modulesTheme', null],
        'categories' => [parent::class, 'categories', null],
        'categoriesFromSource' => [parent::class, 'categoriesFromSource', null],
        'categoriesMenu' => [parent::class, 'categoriesMenu', null],
        'modulesTheme' => [parent::class, 'modulesTheme', null],
    ];
    public function getCategories(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getCategories(...\func_get_args());
        }
        return parent::getCategories(...\func_get_args());
    }
    public function getCategoriesMenu($modules): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getCategoriesMenu(...\func_get_args());
        }
        return parent::getCategoriesMenu(...\func_get_args());
    }
    public function getParentCategory(string $categoryName): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getParentCategory(...\func_get_args());
        }
        return parent::getParentCategory(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CategoriesProviderProxyD3c3032', false)) {
    \class_alias(__NAMESPACE__.'\\CategoriesProviderProxyD3c3032', 'CategoriesProviderProxyD3c3032', false);
}
