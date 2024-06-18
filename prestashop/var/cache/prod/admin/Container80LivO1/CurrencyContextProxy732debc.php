<?php

namespace Container80LivO1;

class CurrencyContextProxy732debc extends \PrestaShop\PrestaShop\Core\Context\CurrencyContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'id' => [parent::class, 'id', null],
        "\0".'*'."\0".'isoCode' => [parent::class, 'isoCode', null],
        "\0".'*'."\0".'localizedNames' => [parent::class, 'localizedNames', null],
        "\0".'*'."\0".'localizedPatterns' => [parent::class, 'localizedPatterns', null],
        "\0".'*'."\0".'localizedSymbols' => [parent::class, 'localizedSymbols', null],
        "\0".'*'."\0".'name' => [parent::class, 'name', null],
        "\0".'*'."\0".'numericIsoCode' => [parent::class, 'numericIsoCode', null],
        "\0".'*'."\0".'pattern' => [parent::class, 'pattern', null],
        "\0".'*'."\0".'precision' => [parent::class, 'precision', null],
        "\0".'*'."\0".'symbol' => [parent::class, 'symbol', null],
        "\0".parent::class."\0".'conversionRate' => [parent::class, 'conversionRate', null],
        'conversionRate' => [parent::class, 'conversionRate', null],
        'id' => [parent::class, 'id', null],
        'isoCode' => [parent::class, 'isoCode', null],
        'localizedNames' => [parent::class, 'localizedNames', null],
        'localizedPatterns' => [parent::class, 'localizedPatterns', null],
        'localizedSymbols' => [parent::class, 'localizedSymbols', null],
        'name' => [parent::class, 'name', null],
        'numericIsoCode' => [parent::class, 'numericIsoCode', null],
        'pattern' => [parent::class, 'pattern', null],
        'precision' => [parent::class, 'precision', null],
        'symbol' => [parent::class, 'symbol', null],
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
    public function getLocalizedNames(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLocalizedNames(...\func_get_args());
        }
        return parent::getLocalizedNames(...\func_get_args());
    }
    public function getIsoCode(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getIsoCode(...\func_get_args());
        }
        return parent::getIsoCode(...\func_get_args());
    }
    public function getNumericIsoCode(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getNumericIsoCode(...\func_get_args());
        }
        return parent::getNumericIsoCode(...\func_get_args());
    }
    public function getConversionRate(): \PrestaShop\Decimal\DecimalNumber
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getConversionRate(...\func_get_args());
        }
        return parent::getConversionRate(...\func_get_args());
    }
    public function getSymbol(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getSymbol(...\func_get_args());
        }
        return parent::getSymbol(...\func_get_args());
    }
    public function getLocalizedSymbols(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLocalizedSymbols(...\func_get_args());
        }
        return parent::getLocalizedSymbols(...\func_get_args());
    }
    public function getPrecision(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPrecision(...\func_get_args());
        }
        return parent::getPrecision(...\func_get_args());
    }
    public function getPattern(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPattern(...\func_get_args());
        }
        return parent::getPattern(...\func_get_args());
    }
    public function getLocalizedPatterns(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLocalizedPatterns(...\func_get_args());
        }
        return parent::getLocalizedPatterns(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CurrencyContextProxy732debc', false)) {
    \class_alias(__NAMESPACE__.'\\CurrencyContextProxy732debc', 'CurrencyContextProxy732debc', false);
}
