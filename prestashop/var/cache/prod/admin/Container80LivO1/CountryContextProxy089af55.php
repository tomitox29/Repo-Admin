<?php

namespace Container80LivO1;

class CountryContextProxy089af55 extends \PrestaShop\PrestaShop\Core\Context\CountryContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'callPrefix' => [parent::class, 'callPrefix', null],
        "\0".'*'."\0".'containsStates' => [parent::class, 'containsStates', null],
        "\0".'*'."\0".'currencyId' => [parent::class, 'currencyId', null],
        "\0".'*'."\0".'id' => [parent::class, 'id', null],
        "\0".'*'."\0".'identificationNumberNeeded' => [parent::class, 'identificationNumberNeeded', null],
        "\0".'*'."\0".'isoCode' => [parent::class, 'isoCode', null],
        "\0".'*'."\0".'name' => [parent::class, 'name', null],
        "\0".'*'."\0".'taxLabelDisplayed' => [parent::class, 'taxLabelDisplayed', null],
        "\0".'*'."\0".'zipCodeFormat' => [parent::class, 'zipCodeFormat', null],
        "\0".'*'."\0".'zipCodeNeeded' => [parent::class, 'zipCodeNeeded', null],
        "\0".'*'."\0".'zoneId' => [parent::class, 'zoneId', null],
        'callPrefix' => [parent::class, 'callPrefix', null],
        'containsStates' => [parent::class, 'containsStates', null],
        'currencyId' => [parent::class, 'currencyId', null],
        'id' => [parent::class, 'id', null],
        'identificationNumberNeeded' => [parent::class, 'identificationNumberNeeded', null],
        'isoCode' => [parent::class, 'isoCode', null],
        'name' => [parent::class, 'name', null],
        'taxLabelDisplayed' => [parent::class, 'taxLabelDisplayed', null],
        'zipCodeFormat' => [parent::class, 'zipCodeFormat', null],
        'zipCodeNeeded' => [parent::class, 'zipCodeNeeded', null],
        'zoneId' => [parent::class, 'zoneId', null],
    ];
    public function getId(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getId(...\func_get_args());
        }
        return parent::getId(...\func_get_args());
    }
    public function getZoneId(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getZoneId(...\func_get_args());
        }
        return parent::getZoneId(...\func_get_args());
    }
    public function getCurrencyId(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getCurrencyId(...\func_get_args());
        }
        return parent::getCurrencyId(...\func_get_args());
    }
    public function getIsoCode(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getIsoCode(...\func_get_args());
        }
        return parent::getIsoCode(...\func_get_args());
    }
    public function getCallPrefix(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getCallPrefix(...\func_get_args());
        }
        return parent::getCallPrefix(...\func_get_args());
    }
    public function getName(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getName(...\func_get_args());
        }
        return parent::getName(...\func_get_args());
    }
    public function containsStates(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->containsStates(...\func_get_args());
        }
        return parent::containsStates(...\func_get_args());
    }
    public function isIdentificationNumberNeeded(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isIdentificationNumberNeeded(...\func_get_args());
        }
        return parent::isIdentificationNumberNeeded(...\func_get_args());
    }
    public function isZipCodeNeeded(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isZipCodeNeeded(...\func_get_args());
        }
        return parent::isZipCodeNeeded(...\func_get_args());
    }
    public function getZipCodeFormat(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getZipCodeFormat(...\func_get_args());
        }
        return parent::getZipCodeFormat(...\func_get_args());
    }
    public function isTaxLabelDisplayed(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isTaxLabelDisplayed(...\func_get_args());
        }
        return parent::isTaxLabelDisplayed(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CountryContextProxy089af55', false)) {
    \class_alias(__NAMESPACE__.'\\CountryContextProxy089af55', 'CountryContextProxy089af55', false);
}
