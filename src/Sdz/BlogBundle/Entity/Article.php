<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use Sdz\BlogBundle\Entity\Tag;

/**
 * Sdz\BlogBundle\Entity\Article
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\ArticleRepository")
 */
class Article
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
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\Datetime()
     */
    private $date;

    /**
     * @var string $titre
     * 
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(limit = 8, message = "Le titre doit avoir au moins {{ limit }} caractères")
     */
    private $titre;

    /**
     * @var text $contenu
     *            
     * @ORM\Column(name="contenu", type="text")
     * @Assert\NotBlank()
     */
    private $contenu;
    
    /**
     * @var string $pseudo
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(limit = 5, message = "Le pseudo doit avoir au moins {{ limit }} caractères")
     */
    private $pseudo;
    
    /**
     * @ORM\ManyToMany(targetEntity="Sdz\BlogBundle\Entity\Tag")
     * @Assert\Valid() 
     */
    private $tags;
    
 	public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->date = new \Datetime();
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
     * Set date
     *
     * @param datetime $date
     */
    public function setDate(\Datetime $date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param text $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * Get contenu
     *
     * @return text 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
    
    /**
     * Set pseudo
     *
     * @param string $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;  
    }
    
    /**
     * Add tag
     *
     * @param Tag $tag
     */
    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;
    }

    /**
     * Get tags
     *
     * @return ArrayCollection
     */
    public function getTags()
    {
        return $this->tags;
    }
}