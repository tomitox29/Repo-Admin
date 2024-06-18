<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ImageType extends \PrestaShopBundle\Entity\ImageType implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'width', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'height', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'products', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'categories', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'manufacturers', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'suppliers', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'stores'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'width', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'height', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'products', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'categories', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'manufacturers', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'suppliers', '' . "\0" . 'PrestaShopBundle\\Entity\\ImageType' . "\0" . 'stores'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ImageType $proxy) {
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
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
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
    public function getWidth(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth(int $width): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$width]);

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight(int $height): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function isProducts(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isProducts', []);

        return parent::isProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducts(bool $products): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducts', [$products]);

        return parent::setProducts($products);
    }

    /**
     * {@inheritDoc}
     */
    public function isCategories(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCategories', []);

        return parent::isCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories(bool $categories): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        return parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function isManufacturers(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManufacturers', []);

        return parent::isManufacturers();
    }

    /**
     * {@inheritDoc}
     */
    public function setManufacturers(bool $manufacturers): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManufacturers', [$manufacturers]);

        return parent::setManufacturers($manufacturers);
    }

    /**
     * {@inheritDoc}
     */
    public function isSuppliers(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuppliers', []);

        return parent::isSuppliers();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuppliers(bool $suppliers): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuppliers', [$suppliers]);

        return parent::setSuppliers($suppliers);
    }

    /**
     * {@inheritDoc}
     */
    public function isStores(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStores', []);

        return parent::isStores();
    }

    /**
     * {@inheritDoc}
     */
    public function setStores(bool $stores): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStores', [$stores]);

        return parent::setStores($stores);
    }

}
