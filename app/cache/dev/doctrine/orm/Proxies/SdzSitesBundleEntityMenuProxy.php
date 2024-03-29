<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SdzSitesBundleEntityMenuProxy extends \Sdz\SitesBundle\Entity\Menu implements \Doctrine\ORM\Proxy\Proxy
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

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function getLinks()
    {
        $this->__load();
        return parent::getLinks();
    }

    public function getSite()
    {
        $this->__load();
        return parent::getSite();
    }

    public function getPosition()
    {
        $this->__load();
        return parent::getPosition();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function addLink(\Sdz\SitesBundle\Entity\Lien $link)
    {
        $this->__load();
        return parent::addLink($link);
    }

    public function setSite($site)
    {
        $this->__load();
        return parent::setSite($site);
    }

    public function setPosition($position)
    {
        $this->__load();
        return parent::setPosition($position);
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

    public function setPersisted($persisted)
    {
        $this->__load();
        return parent::setPersisted($persisted);
    }

    public function isPersisted()
    {
        $this->__load();
        return parent::isPersisted();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'type', 'title', 'links', 'site', 'position', 'deleted', 'persisted');
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