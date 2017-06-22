<?php

namespace Proxies\__CG__\Fix\ServicemeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Decodificadores extends \Fix\ServicemeBundle\Entity\Decodificadores implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'id', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'plataforma', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'marca', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'modelo', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'referencia', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'estado'];
        }

        return ['__isInitialized__', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'id', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'plataforma', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'marca', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'modelo', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'referencia', '' . "\0" . 'Fix\\ServicemeBundle\\Entity\\Decodificadores' . "\0" . 'estado'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Decodificadores $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function setPlataforma($plataforma)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlataforma', [$plataforma]);

        return parent::setPlataforma($plataforma);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlataforma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlataforma', []);

        return parent::getPlataforma();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarca($marca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarca', [$marca]);

        return parent::setMarca($marca);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarca', []);

        return parent::getMarca();
    }

    /**
     * {@inheritDoc}
     */
    public function setModelo($modelo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModelo', [$modelo]);

        return parent::setModelo($modelo);
    }

    /**
     * {@inheritDoc}
     */
    public function getModelo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelo', []);

        return parent::getModelo();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferencia($referencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferencia', [$referencia]);

        return parent::setReferencia($referencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferencia', []);

        return parent::getReferencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(\Fix\ServicemeBundle\Entity\Estados $estado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

}
