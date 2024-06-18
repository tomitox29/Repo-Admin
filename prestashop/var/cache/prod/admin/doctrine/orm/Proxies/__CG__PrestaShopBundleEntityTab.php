<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tab extends \PrestaShopBundle\Entity\Tab implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'idParent', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'position', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'module', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'className', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'routeName', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'enabled', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'icon', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'wording', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'wordingDomain', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'tabLangs'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'idParent', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'position', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'module', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'className', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'routeName', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'enabled', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'icon', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'wording', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'wordingDomain', '' . "\0" . 'PrestaShopBundle\\Entity\\Tab' . "\0" . 'tabLangs'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tab $proxy) {
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
    public function getIdParent(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdParent', []);

        return parent::getIdParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdParent(int $idParent): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdParent', [$idParent]);

        return parent::setIdParent($idParent);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition(int $position): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getModule(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModule', []);

        return parent::getModule();
    }

    /**
     * {@inheritDoc}
     */
    public function setModule(?string $module): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModule', [$module]);

        return parent::setModule($module);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassName', []);

        return parent::getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassName(string $className): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassName', [$className]);

        return parent::setClassName($className);
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
    public function setActive(bool $active): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcon(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcon', []);

        return parent::getIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcon(?string $icon): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcon', [$icon]);

        return parent::setIcon($icon);
    }

    /**
     * {@inheritDoc}
     */
    public function getTabLangs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTabLangs', []);

        return parent::getTabLangs();
    }

    /**
     * {@inheritDoc}
     */
    public function getTabLangByLanguageId(int $languageId): ?\PrestaShopBundle\Entity\TabLang
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTabLangByLanguageId', [$languageId]);

        return parent::getTabLangByLanguageId($languageId);
    }

    /**
     * {@inheritDoc}
     */
    public function addTabLang(\PrestaShopBundle\Entity\TabLang $tabLang): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTabLang', [$tabLang]);

        return parent::addTabLang($tabLang);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTabLang(\PrestaShopBundle\Entity\TabLang $tabLang): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTabLang', [$tabLang]);

        parent::removeTabLang($tabLang);
    }

    /**
     * {@inheritDoc}
     */
    public function getWording(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWording', []);

        return parent::getWording();
    }

    /**
     * {@inheritDoc}
     */
    public function setWording(?string $wording): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWording', [$wording]);

        return parent::setWording($wording);
    }

    /**
     * {@inheritDoc}
     */
    public function getWordingDomain(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWordingDomain', []);

        return parent::getWordingDomain();
    }

    /**
     * {@inheritDoc}
     */
    public function setWordingDomain(?string $wordingDomain): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWordingDomain', [$wordingDomain]);

        return parent::setWordingDomain($wordingDomain);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouteName', []);

        return parent::getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setRouteName(?string $routeName): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRouteName', [$routeName]);

        return parent::setRouteName($routeName);
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

}
