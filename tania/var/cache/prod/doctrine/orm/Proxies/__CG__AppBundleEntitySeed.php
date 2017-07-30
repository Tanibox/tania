<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Seed extends \AppBundle\Entity\Seed implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'seedCategory', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'plants', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'quantity', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'measurementUnit', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'producerName', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'originCountry', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'note', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'expirationMonth', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'expirationYear', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'germinationRate', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'imageFile', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'image', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'createdAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'seedCategory', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'plants', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'quantity', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'measurementUnit', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'producerName', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'originCountry', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'note', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'expirationMonth', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'expirationYear', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'germinationRate', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'imageFile', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'image', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Seed' . "\0" . 'createdAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Seed $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
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
    public function setQuantity($quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', [$quantity]);

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeasurementUnit($measurementUnit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeasurementUnit', [$measurementUnit]);

        return parent::setMeasurementUnit($measurementUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeasurementUnit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeasurementUnit', []);

        return parent::getMeasurementUnit();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducerName($producerName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducerName', [$producerName]);

        return parent::setProducerName($producerName);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducerName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducerName', []);

        return parent::getProducerName();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginCountry($originCountry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginCountry', [$originCountry]);

        return parent::setOriginCountry($originCountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginCountry', []);

        return parent::getOriginCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpirationMonth($expirationMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpirationMonth', [$expirationMonth]);

        return parent::setExpirationMonth($expirationMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpirationMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpirationMonth', []);

        return parent::getExpirationMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpirationYear($expirationYear)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpirationYear', [$expirationYear]);

        return parent::setExpirationYear($expirationYear);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpirationYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpirationYear', []);

        return parent::getExpirationYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setGerminationRate($germinationRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGerminationRate', [$germinationRate]);

        return parent::setGerminationRate($germinationRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getGerminationRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGerminationRate', []);

        return parent::getGerminationRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function addPlant(\AppBundle\Entity\Plant $plant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPlant', [$plant]);

        return parent::addPlant($plant);
    }

    /**
     * {@inheritDoc}
     */
    public function removePlant(\AppBundle\Entity\Plant $plant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePlant', [$plant]);

        return parent::removePlant($plant);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlants', []);

        return parent::getPlants();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeedCategory(\AppBundle\Entity\SeedCategory $seedCategory = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeedCategory', [$seedCategory]);

        return parent::setSeedCategory($seedCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeedCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeedCategory', []);

        return parent::getSeedCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$image]);

        return parent::setImageFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Vich\UploaderBundle\Entity\File $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function validate(\Symfony\Component\Validator\Context\ExecutionContextInterface $context, $payload)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validate', [$context, $payload]);

        return parent::validate($context, $payload);
    }

}