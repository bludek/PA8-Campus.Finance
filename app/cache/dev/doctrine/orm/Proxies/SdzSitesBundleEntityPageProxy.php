<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SdzSitesBundleEntityPageProxy extends \Sdz\SitesBundle\Entity\Page implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getSite()
    {
        $this->__load();
        return parent::getSite();
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function isHome()
    {
        $this->__load();
        return parent::isHome();
    }

    public function setSite(\Sdz\SitesBundle\Entity\Site $site)
    {
        $this->__load();
        return parent::setSite($site);
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function setHome($home)
    {
        $this->__load();
        return parent::setHome($home);
    }

    public function setDeleted($deleted)
    {
        $this->__load();
        return parent::setDeleted($deleted);
    }

    public function isDeleted()
    {
        $this->__load();
        return parent::isDeleted();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'site', 'title', 'name', 'type', 'home', 'deleted');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}