<?php

namespace Sdz\SitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use Sdz\SitesBundle\Entity\Lien;

/**
 * Sdz\SitesBundle\Entity\Menu
 * 
 * @ORM\Entity
 * @ORM\Table(name="Menu")
 * @ORM\Entity(repositoryClass="Sdz\SitesBundle\Entity\SectionRepository")
 */
class Menu
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
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    protected $type;
    
    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    protected $title;
    
    /**
     * @ORM\OneToMany(targetEntity="Sdz\SitesBundle\Entity\Lien", mappedBy="menu", cascade={"persist", "delete"})
     * @Assert\Valid() 
     */
    protected $links;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sdz\SitesBundle\Entity\Site")
     * @Assert\Valid() 
     */
    protected $site;
    
    /**
     * @var integer $position
     * @ORM\Column(name="position", type="integer") 
     */
    protected $position;

    /**
     * @var boolean $deleted
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;
    
    /**
     * @var boolean $persisted
     *
     * @ORM\Column(name="persisted", type="boolean")
     */
    private $persisted;
    
    public function __toString()
    {
        return $this->title;
    }
    
    public function __construct($title = null, $type = null)
    {
        $this->persisted = false;
        $this->deleted   = false;
        $this->links     = new ArrayCollection();
        $this->position  = 0;
        $this->type      = $type;
        $this->title     = $title;
        if ($type == "header")
        {
            $this->type  = $type;
            $this->title = $title; 
        }
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
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getLinks()
    {
        return $this->links;
    }
    
    public function getSite()
    {
        return $this->site;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function addLink(Lien $link)
    {
        $link->setMenu($this);
        $this->links[] = $link;
    }
    
    public function setSite($site)
    {
        $this->site = $site;
    }
    
    public function setPosition($position)
    {
        $this->position = $position;
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
    public function isDeleted()
    {
        return $this->deleted;
    }
    
    
    /**
     * Set persisted
     *
     * @param boolean $persisted
     */
    public function setPersisted($persisted)
    {
        $this->persisted = $persisted;
    }

    /**
     * Get persisted
     *
     * @return boolean 
     */
    public function isPersisted()
    {
        return $this->persisted;
    }
}