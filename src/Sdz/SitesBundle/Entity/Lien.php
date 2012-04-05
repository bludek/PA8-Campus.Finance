<?php

namespace Sdz\SitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use Sdz\SitesBundle\Entity\Page;
use Sdz\SitesBundle\Entity\Menu;

/**
 * Sdz\SitesBundle\Entity\Lien
 * 
 * @ORM\Entity
 * @ORM\Table(name="Lien")
 * @ORM\Entity(repositoryClass="Sdz\SitesBundle\Entity\SectionRepository")
 */
class Lien
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
     * @ORM\ManyToOne(targetEntity="Sdz\SitesBundle\Entity\Menu", inversedBy="links")
     * @Assert\Valid() 
     */
    protected $menu;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sdz\SitesBundle\Entity\Page")
     * @Assert\Valid() 
     */
    protected $page;
    
    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=70)
     */
    protected $title;
    
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

    public function __construct($title = null)
    {
        $this->persisted = false;
        $this->deleted   = false;
        $this->title = $title;
        $this->position = 0;
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
    
    public function getMenu()
    {
        return $this->menu;
    }
    
    public function getPage()
    {
        return $this->page;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    
    
    public function setMenu($menu)
    {
        $this->menu = $menu;
    }
    
    public function setPage($page)
    {
        $this->page = $page;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
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