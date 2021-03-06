<?php

namespace DoctrineProxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Session extends \Session implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'isPrivate', 'token', 'cardSet', 'lastAction', 'members', 'polls', 'currentPoll'];
        }

        return ['__isInitialized__', 'id', 'name', 'isPrivate', 'token', 'cardSet', 'lastAction', 'members', 'polls', 'currentPoll'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Session $proxy) {
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPrivate', []);

        return parent::getIsPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPrivate($isPrivate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPrivate', [$isPrivate]);

        return parent::setIsPrivate($isPrivate);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getCardSet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCardSet', []);

        return parent::getCardSet();
    }

    /**
     * {@inheritDoc}
     */
    public function setCardSet($cardSet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCardSet', [$cardSet]);

        return parent::setCardSet($cardSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastAction', []);

        return parent::getLastAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastAction($lastAction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastAction', [$lastAction]);

        return parent::setLastAction($lastAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getMembers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMembers', []);

        return parent::getMembers();
    }

    /**
     * {@inheritDoc}
     */
    public function getPolls()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPolls', []);

        return parent::getPolls();
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentPoll()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentPoll', []);

        return parent::getCurrentPoll();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentPoll($currentPoll)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentPoll', [$currentPoll]);

        return parent::setCurrentPoll($currentPoll);
    }

}
