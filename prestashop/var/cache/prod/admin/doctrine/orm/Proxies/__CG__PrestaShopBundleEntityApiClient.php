<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ApiClient extends \PrestaShopBundle\Entity\ApiClient implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'clientId', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'clientName', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'clientSecret', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'enabled', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'scopes', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'description', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'externalIssuer', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'lifetime'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'clientId', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'clientName', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'clientSecret', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'enabled', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'scopes', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'description', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'externalIssuer', '' . "\0" . 'PrestaShopBundle\\Entity\\ApiClient' . "\0" . 'lifetime'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ApiClient $proxy) {
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
    public function setId(int $id): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientId(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientId', []);

        return parent::getClientId();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientId(string $clientId): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientId', [$clientId]);

        return parent::setClientId($clientId);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientName', []);

        return parent::getClientName();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientName(string $clientName): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientName', [$clientName]);

        return parent::setClientName($clientName);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientSecret(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientSecret', []);

        return parent::getClientSecret();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientSecret(?string $clientSecret): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientSecret', [$clientSecret]);

        return parent::setClientSecret($clientSecret);
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
    public function setEnabled(bool $enabled): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getScopes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScopes', []);

        return parent::getScopes();
    }

    /**
     * {@inheritDoc}
     */
    public function setScopes(array $scopes): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScopes', [$scopes]);

        return parent::setScopes($scopes);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getLifetime(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLifetime', []);

        return parent::getLifetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setLifetime(int $lifetime): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLifetime', [$lifetime]);

        return parent::setLifetime($lifetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalIssuer(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalIssuer', []);

        return parent::getExternalIssuer();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalIssuer(?string $externalIssuer): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalIssuer', [$externalIssuer]);

        return parent::setExternalIssuer($externalIssuer);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

}
