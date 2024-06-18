<?php

namespace ContainerGqfUnWk;

class ShopContextProxy8518dfe extends \PrestaShop\PrestaShop\Core\Context\ShopContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'active' => [parent::class, 'active', null],
        "\0".'*'."\0".'associatedShopIds' => [parent::class, 'associatedShopIds', null],
        "\0".'*'."\0".'categoryId' => [parent::class, 'categoryId', null],
        "\0".'*'."\0".'color' => [parent::class, 'color', null],
        "\0".'*'."\0".'domain' => [parent::class, 'domain', null],
        "\0".'*'."\0".'domainSSL' => [parent::class, 'domainSSL', null],
        "\0".'*'."\0".'id' => [parent::class, 'id', null],
        "\0".'*'."\0".'name' => [parent::class, 'name', null],
        "\0".'*'."\0".'physicalUri' => [parent::class, 'physicalUri', null],
        "\0".'*'."\0".'secured' => [parent::class, 'secured', null],
        "\0".'*'."\0".'shopConstraint' => [parent::class, 'shopConstraint', parent::class],
        "\0".'*'."\0".'shopGroupId' => [parent::class, 'shopGroupId', null],
        "\0".'*'."\0".'themeName' => [parent::class, 'themeName', null],
        "\0".'*'."\0".'virtualUri' => [parent::class, 'virtualUri', null],
        'active' => [parent::class, 'active', null],
        'associatedShopIds' => [parent::class, 'associatedShopIds', null],
        'categoryId' => [parent::class, 'categoryId', null],
        'color' => [parent::class, 'color', null],
        'domain' => [parent::class, 'domain', null],
        'domainSSL' => [parent::class, 'domainSSL', null],
        'id' => [parent::class, 'id', null],
        'name' => [parent::class, 'name', null],
        'physicalUri' => [parent::class, 'physicalUri', null],
        'secured' => [parent::class, 'secured', null],
        'shopConstraint' => [parent::class, 'shopConstraint', parent::class],
        'shopGroupId' => [parent::class, 'shopGroupId', null],
        'themeName' => [parent::class, 'themeName', null],
        'virtualUri' => [parent::class, 'virtualUri', null],
    ];
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getShopConstraint(...\func_get_args());
        }
        return parent::getShopConstraint(...\func_get_args());
    }
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
    public function getShopGroupId(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getShopGroupId(...\func_get_args());
        }
        return parent::getShopGroupId(...\func_get_args());
    }
    public function getCategoryId(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getCategoryId(...\func_get_args());
        }
        return parent::getCategoryId(...\func_get_args());
    }
    public function getThemeName(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getThemeName(...\func_get_args());
        }
        return parent::getThemeName(...\func_get_args());
    }
    public function getColor(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getColor(...\func_get_args());
        }
        return parent::getColor(...\func_get_args());
    }
    public function isActive(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isActive(...\func_get_args());
        }
        return parent::isActive(...\func_get_args());
    }
    public function getPhysicalUri(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPhysicalUri(...\func_get_args());
        }
        return parent::getPhysicalUri(...\func_get_args());
    }
    public function getVirtualUri(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getVirtualUri(...\func_get_args());
        }
        return parent::getVirtualUri(...\func_get_args());
    }
    public function getDomain(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDomain(...\func_get_args());
        }
        return parent::getDomain(...\func_get_args());
    }
    public function getDomainSSL(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDomainSSL(...\func_get_args());
        }
        return parent::getDomainSSL(...\func_get_args());
    }
    public function getBaseURI(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBaseURI(...\func_get_args());
        }
        return parent::getBaseURI(...\func_get_args());
    }
    public function getBaseURL(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBaseURL(...\func_get_args());
        }
        return parent::getBaseURL(...\func_get_args());
    }
    public function getAssociatedShopIds(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getAssociatedShopIds(...\func_get_args());
        }
        return parent::getAssociatedShopIds(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ShopContextProxy8518dfe', false)) {
    \class_alias(__NAMESPACE__.'\\ShopContextProxy8518dfe', 'ShopContextProxy8518dfe', false);
}
