<?php

namespace Sdz\SitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use Sdz\UserBundle\Entity\User;

/**
 * Sdz\SitesBundle\Entity\Site
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\SitesBundle\Entity\SiteRepository")
 */
class Site
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable="true")
     */
    private $description;

    /**
     * @var boolean $visibility
     *
     * @ORM\Column(name="visibility", type="boolean")
     */
    private $visibility;

    /**
     * @var boolean $deleted
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;

    /**
     * @var datetime $deleted_at
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable="true")
     * @Assert\DateTime()
     */
    private $deleted_at;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Assert\Datetime()
     */
    private $created_at;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sdz\UserBundle\Entity\User")
     * @Assert\Valid() 
     */ 
    private $User;
    
     
    public function __toString()
    {
        return $this->name;
    }
    
    public function __construct()
    {
        $this->deleted = false; 
        $this->visibility = false;
        $this->created_at = new \Datetime();
    }
     
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set visibility
     *
     * @param boolean $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * Get visibility
     *
     * @return boolean 
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set deleted_at
     *
     * @param datetime $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deleted_at = $deletedAt;
    }

    /**
     * Get deleted_at
     *
     * @return datetime 
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    
    /**
     * Set User
     *
     * @param User $user
     */
    public function setUser($user)
    {
        $this->User= $user;
    }

    /**
     * Get User
     *
     * @return User
     */
    public function getUser()
    {
        return $this->User;
    }
}