<?php

namespace Proxies\__CG__\Intranet\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Etudiant extends \Intranet\AdminBundle\Entity\Etudiant implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'id', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'nom', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'sexe', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'prenom', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'datenaissance', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'date', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'matricule', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'email', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'telephone', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'compte', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'anneescolaire', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'classes');
        }

        return array('__isInitialized__', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'id', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'nom', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'sexe', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'prenom', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'datenaissance', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'date', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'matricule', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'email', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'telephone', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'compte', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'anneescolaire', '' . "\0" . 'Intranet\\AdminBundle\\Entity\\Etudiant' . "\0" . 'classes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Etudiant $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function classeActuelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'classeActuelle', array());

        return parent::classeActuelle();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatenaissance($datenaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatenaissance', array($datenaissance));

        return parent::setDatenaissance($datenaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatenaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatenaissance', array());

        return parent::getDatenaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule($matricule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', array($matricule));

        return parent::setMatricule($matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', array());

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', array($telephone));

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', array());

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompte(\OC\UserBundle\Entity\User $compte = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompte', array($compte));

        return parent::setCompte($compte);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompte', array());

        return parent::getCompte();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnneescolaire(\Intranet\AdminBundle\Entity\Anneescolaire $anneescolaire = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnneescolaire', array($anneescolaire));

        return parent::setAnneescolaire($anneescolaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnneescolaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnneescolaire', array());

        return parent::getAnneescolaire();
    }

    /**
     * {@inheritDoc}
     */
    public function addClass(\Intranet\AdminBundle\Entity\Classeetudiant $classes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClass', array($classes));

        return parent::addClass($classes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClass(\Intranet\AdminBundle\Entity\Classeetudiant $classes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClass', array($classes));

        return parent::removeClass($classes);
    }

    /**
     * {@inheritDoc}
     */
    public function getClasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClasses', array());

        return parent::getClasses();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', array($sexe));

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', array());

        return parent::getSexe();
    }

}
