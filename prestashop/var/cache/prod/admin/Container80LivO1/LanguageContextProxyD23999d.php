<?php

namespace Container80LivO1;

class LanguageContextProxyD23999d extends \PrestaShop\PrestaShop\Core\Context\LanguageContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'dateFormat' => [parent::class, 'dateFormat', parent::class],
        "\0".'*'."\0".'dateTimeFormat' => [parent::class, 'dateTimeFormat', parent::class],
        "\0".'*'."\0".'id' => [parent::class, 'id', parent::class],
        "\0".'*'."\0".'isRTL' => [parent::class, 'isRTL', parent::class],
        "\0".'*'."\0".'isoCode' => [parent::class, 'isoCode', parent::class],
        "\0".'*'."\0".'languageCode' => [parent::class, 'languageCode', parent::class],
        "\0".'*'."\0".'locale' => [parent::class, 'locale', parent::class],
        "\0".'*'."\0".'localizationLocale' => [parent::class, 'localizationLocale', parent::class],
        "\0".'*'."\0".'name' => [parent::class, 'name', parent::class],
        'dateFormat' => [parent::class, 'dateFormat', parent::class],
        'dateTimeFormat' => [parent::class, 'dateTimeFormat', parent::class],
        'id' => [parent::class, 'id', parent::class],
        'isRTL' => [parent::class, 'isRTL', parent::class],
        'isoCode' => [parent::class, 'isoCode', parent::class],
        'languageCode' => [parent::class, 'languageCode', parent::class],
        'locale' => [parent::class, 'locale', parent::class],
        'localizationLocale' => [parent::class, 'localizationLocale', parent::class],
        'name' => [parent::class, 'name', parent::class],
    ];
    public function getId(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getId(...\func_get_args());
        }
        return parent::getId(...\func_get_args());
    }
    public function getName(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getName(...\func_get_args());
        }
        return parent::getName(...\func_get_args());
    }
    public function getIsoCode(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getIsoCode(...\func_get_args());
        }
        return parent::getIsoCode(...\func_get_args());
    }
    public function getLocale(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLocale(...\func_get_args());
        }
        return parent::getLocale(...\func_get_args());
    }
    public function getLanguageCode(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLanguageCode(...\func_get_args());
        }
        return parent::getLanguageCode(...\func_get_args());
    }
    public function isRTL(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isRTL(...\func_get_args());
        }
        return parent::isRTL(...\func_get_args());
    }
    public function getDateFormat(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDateFormat(...\func_get_args());
        }
        return parent::getDateFormat(...\func_get_args());
    }
    public function getDateTimeFormat(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDateTimeFormat(...\func_get_args());
        }
        return parent::getDateTimeFormat(...\func_get_args());
    }
    public function getCode(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getCode(...\func_get_args());
        }
        return parent::getCode(...\func_get_args());
    }
    public function formatNumber(float|int|string $number): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->formatNumber(...\func_get_args());
        }
        return parent::formatNumber(...\func_get_args());
    }
    public function formatPrice(float|int|string $number, string $currencyCode): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->formatPrice(...\func_get_args());
        }
        return parent::formatPrice(...\func_get_args());
    }
    public function getPriceSpecification(string $currencyCode): \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPriceSpecification(...\func_get_args());
        }
        return parent::getPriceSpecification(...\func_get_args());
    }
    public function getNumberSpecification(): \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getNumberSpecification(...\func_get_args());
        }
        return parent::getNumberSpecification(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('LanguageContextProxyD23999d', false)) {
    \class_alias(__NAMESPACE__.'\\LanguageContextProxyD23999d', 'LanguageContextProxyD23999d', false);
}