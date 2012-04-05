<?php

namespace Sdz\SitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use Sdz\SitesBundle\Entity\Site;

/**
 * Sdz\SitesBundle\Entity\Page
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\SitesBundle\Entity\PageRepository")
 */
class Page
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
     * @ORM\ManyToOne(targetEntity="Sdz\SitesBundle\Entity\Site")
     * @Assert\Valid() 
     */
    protected $site;
    
    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    protected $title;
        
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    protected $name;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    protected $type;
    
    /**
     * @var boolean $home
     * @ORM\Column(name="home", type="boolean")
     */
    protected $home;
    
    /**
     * @var boolean $deleted
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;
    
    
    public function __toString()
    {
        return $this->title;
    }

    public function __construct($type = null)
    {
        $this->type    = $type;
        $this->home    = false;
        $this->deleted = false;
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
    
    public function getSite()
    {
        return $this->site;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function isHome()
    {
        return $this->home;
    }



    public function setSite(Site $site)
    {
        $this->site = $site;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function setHome($home)
    {
        $this->home = $home;
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
     * is deleted
     *
     * @return boolean 
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

}