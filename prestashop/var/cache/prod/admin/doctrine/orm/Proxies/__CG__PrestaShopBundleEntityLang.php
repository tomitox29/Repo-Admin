<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Lang extends \PrestaShopBundle\Entity\Lang implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isoCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'languageCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'locale', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatLite', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatFull', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isRtl', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'translations', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'shops'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isoCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'languageCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'locale', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatLite', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatFull', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isRtl', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'translations', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'shops'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Lang $proxy) {
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
    public function setIsoCode(string $isoCode): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsoCode', [$isoCode]);

        return parent::setIsoCode($isoCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsoCode(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsoCode', []);

        return parent::getIsoCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguageCode(string $languageCode): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguageCode', [$languageCode]);

        return parent::setLanguageCode($languageCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguageCode(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguageCode', []);

        return parent::getLanguageCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFormatLite(string $dateFormatLite): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFormatLite', [$dateFormatLite]);

        return parent::setDateFormatLite($dateFormatLite);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormatLite(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFormatLite', []);

        return parent::getDateFormatLite();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormat(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFormat', []);

        return parent::getDateFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFormatFull(string $dateFormatFull): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFormatFull', [$dateFormatFull]);

        return parent::setDateFormatFull($dateFormatFull);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormatFull(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFormatFull', []);

        return parent::getDateFormatFull();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeFormat(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateTimeFormat', []);

        return parent::getDateTimeFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRtl(bool $isRtl): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRtl', [$isRtl]);

        return parent::setIsRtl($isRtl);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRtl(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRtl', []);

        return parent::getIsRtl();
    }

    /**
     * {@inheritDoc}
     */
    public function isRTL(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRTL', []);

        return parent::isRTL();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', []);

        return parent::getLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale($locale): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', [$locale]);

        return parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function addShop(\PrestaShopBundle\Entity\Shop $shop): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addShop', [$shop]);

        return parent::addShop($shop);
    }

    /**
     * {@inheritDoc}
     */
    public function removeShop(\PrestaShopBundle\Entity\Shop $shop): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeShop', [$shop]);

        parent::removeShop($shop);
    }

    /**
     * {@inheritDoc}
     */
    public function getShops(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShops', []);

        return parent::getShops();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

}