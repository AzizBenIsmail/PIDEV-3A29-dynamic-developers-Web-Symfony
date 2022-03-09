<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Excursion extends \App\Entity\Excursion implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'ID_Client', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Nom_Excursion', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Description_Excursion', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Date', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Type_Excursion', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Lieu', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'valabilite', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Image'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'ID_Client', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Nom_Excursion', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Description_Excursion', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Date', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Type_Excursion', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Lieu', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'valabilite', '' . "\0" . 'App\\Entity\\Excursion' . "\0" . 'Image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Excursion $proxy) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getIDClient(): ?\App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIDClient', []);

        return parent::getIDClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setIDClient(?\App\Entity\Client $ID_Client): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIDClient', [$ID_Client]);

        return parent::setIDClient($ID_Client);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomExcursion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomExcursion', []);

        return parent::getNomExcursion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomExcursion(string $Nom_Excursion): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomExcursion', [$Nom_Excursion]);

        return parent::setNomExcursion($Nom_Excursion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionExcursion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionExcursion', []);

        return parent::getDescriptionExcursion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionExcursion(string $Description_Excursion): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionExcursion', [$Description_Excursion]);

        return parent::setDescriptionExcursion($Description_Excursion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTimeInterface $Date): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$Date]);

        return parent::setDate($Date);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeExcursion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeExcursion', []);

        return parent::getTypeExcursion();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeExcursion(string $Type_Excursion): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeExcursion', [$Type_Excursion]);

        return parent::setTypeExcursion($Type_Excursion);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieu', []);

        return parent::getLieu();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieu(string $Lieu): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieu', [$Lieu]);

        return parent::setLieu($Lieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getValabilite(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValabilite', []);

        return parent::getValabilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setValabilite(string $valabilite): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValabilite', [$valabilite]);

        return parent::setValabilite($valabilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $Image): \App\Entity\Excursion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$Image]);

        return parent::setImage($Image);
    }

}
