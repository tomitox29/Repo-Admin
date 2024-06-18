<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Shop extends \PrestaShopBundle\Entity\Shop implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'shopGroup', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'color', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'idCategory', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'themeName', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'deleted', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'shopUrls'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'shopGroup', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'color', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'idCategory', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'themeName', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'deleted', '' . "\0" . 'PrestaShopBundle\\Entity\\Shop' . "\0" . 'shopUrls'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Shop $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor(string $color): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCategory(int $idCategory): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCategory', [$idCategory]);

        return parent::setIdCategory($idCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCategory(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCategory', []);

        return parent::getIdCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeName(string $themeName): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeName', [$themeName]);

        return parent::setThemeName($themeName);
    }

    /**
     * {@inheritDoc}
     */
    public function getThemeName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeName', []);

        return parent::getThemeName();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive(bool $active): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted(bool $deleted): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setShopGroup(\PrestaShopBundle\Entity\ShopGroup $shopGroup): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShopGroup', [$shopGroup]);

        return parent::setShopGroup($shopGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getShopGroup(): \PrestaShopBundle\Entity\ShopGroup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShopGroup', []);

        return parent::getShopGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function getShopUrls(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShopUrls', []);

        return parent::getShopUrls();
    }

    /**
     * {@inheritDoc}
     */
    public function hasMainUrl(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasMainUrl', []);

        return parent::hasMainUrl();
    }

}
