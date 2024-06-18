<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ShopGroup extends \PrestaShopBundle\Entity\ShopGroup implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'color', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shareCustomer', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shareOrder', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shareStock', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'deleted', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shops'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'color', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shareCustomer', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shareOrder', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shareStock', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'deleted', '' . "\0" . 'PrestaShopBundle\\Entity\\ShopGroup' . "\0" . 'shops'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ShopGroup $proxy) {
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
    public function setShareCustomer(bool $shareCustomer): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShareCustomer', [$shareCustomer]);

        return parent::setShareCustomer($shareCustomer);
    }

    /**
     * {@inheritDoc}
     */
    public function getShareCustomer(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShareCustomer', []);

        return parent::getShareCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setShareOrder(bool $shareOrder): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShareOrder', [$shareOrder]);

        return parent::setShareOrder($shareOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getShareOrder(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShareOrder', []);

        return parent::getShareOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setShareStock(bool $shareStock): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShareStock', [$shareStock]);

        return parent::setShareStock($shareStock);
    }

    /**
     * {@inheritDoc}
     */
    public function getShareStock(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShareStock', []);

        return parent::getShareStock();
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
    public function getShops(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShops', []);

        return parent::getShops();
    }

}
