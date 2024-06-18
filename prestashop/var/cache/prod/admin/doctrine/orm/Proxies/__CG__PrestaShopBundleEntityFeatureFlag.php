<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FeatureFlag extends \PrestaShopBundle\Entity\FeatureFlag implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'type', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'state', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'labelWording', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'labelDomain', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'descriptionWording', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'descriptionDomain', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'stability'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'type', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'state', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'labelWording', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'labelDomain', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'descriptionWording', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'descriptionDomain', '' . "\0" . 'PrestaShopBundle\\Entity\\FeatureFlag' . "\0" . 'stability'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FeatureFlag $proxy) {
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
    public function isEnabled(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function disable(): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'disable', []);

        return parent::disable();
    }

    /**
     * {@inheritDoc}
     */
    public function enable(): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enable', []);

        return parent::enable();
    }

    /**
     * {@inheritDoc}
     */
    public function getLabelWording(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabelWording', []);

        return parent::getLabelWording();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabelWording(string $labelWording): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabelWording', [$labelWording]);

        return parent::setLabelWording($labelWording);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabelDomain(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabelDomain', []);

        return parent::getLabelDomain();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabelDomain(string $labelDomain): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabelDomain', [$labelDomain]);

        return parent::setLabelDomain($labelDomain);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionWording(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionWording', []);

        return parent::getDescriptionWording();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionWording(string $descriptionWording): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionWording', [$descriptionWording]);

        return parent::setDescriptionWording($descriptionWording);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionDomain(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionDomain', []);

        return parent::getDescriptionDomain();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionDomain(string $descriptionDomain): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionDomain', [$descriptionDomain]);

        return parent::setDescriptionDomain($descriptionDomain);
    }

    /**
     * {@inheritDoc}
     */
    public function getStability(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStability', []);

        return parent::getStability();
    }

    /**
     * {@inheritDoc}
     */
    public function setStability(string $stability): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStability', [$stability]);

        return parent::setStability($stability);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderedTypes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderedTypes', []);

        return parent::getOrderedTypes();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

}