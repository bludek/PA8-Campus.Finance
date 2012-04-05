<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SdzBlogBundleEntityArticleProxy extends \Sdz\BlogBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setDate(\DateTime $date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setContenu($contenu)
    {
        $this->__load();
        return parent::setContenu($contenu);
    }

    public function getContenu()
    {
        $this->__load();
        return parent::getContenu();
    }

    public function setPseudo($pseudo)
    {
        $this->__load();
        return parent::setPseudo($pseudo);
    }

    public function getPseudo()
    {
        $this->__load();
        return parent::getPseudo();
    }

    public function addTag(\Sdz\BlogBundle\Entity\Tag $tag)
    {
        $this->__load();
        return parent::addTag($tag);
    }

    public function getTags()
    {
        $this->__load();
        return parent::getTags();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'date', 'titre', 'contenu', 'pseudo', 'tags');
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