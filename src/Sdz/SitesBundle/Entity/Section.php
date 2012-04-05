<?php

namespace Sdz\SitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use Sdz\SitesBundle\Entity\Page;

/**
 * Sdz\SitesBundle\Entity\Section
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\SitesBundle\Entity\SectionRepository")
 */
class Section
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
     * @var text $contenu
     *
     * @ORM\Column(name="contenu", type="text")
     */
    protected $contenu;
    
    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    protected $type;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sdz\SitesBundle\Entity\Page")
     * @Assert\Valid() 
     */
    protected $page;
    
    /**
     * @var integer $position
     * @ORM\Column(name="position", type="integer") 
     */
    protected $position;



    public function __construct($type = null)
    {
        $this->type = $type;
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
    
    public function getContenu()
    {
        return $this->contenu;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getPage()
    {
        return $this->page;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function setPage(Page $page)
    {
        $this->page = $page;
    }
    
    public function setPosition($position)
    {
        $this->position = $position;
    }
    
    public function defaultContenu($type)
    {
        if($type == "hero-unit")
        {
            $this->contenu = '<h1>Campus Finance - EFREI</h1>
                <p>Ceci est le template pour r&eacute;aliser vos cours de finance en ligne ou votre site d\'information. Il inclut un grand nombre d\'outil et supporte n\'importe quel type de contenu. Utilisez-le comme point de d&eacute;part pour cr&eacute;er quelque chose d\'unique.</p>';
        }
        else if ($type == "span4")
        {
            $this->contenu = '<h2>Template par défaut</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>';
        }
        else
        {
            $this->contenu = '<h2>Donec id elit non mi porta</h2>
            
            <h3>Donec id elit non mi porta</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

            <h3>Donec id elit non mi porta</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

            <h3>Donec id elit non mi porta</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

            <h3>Donec id elit non mi porta</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

            <h3>Donec id elit non mi porta</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>';
        }
    }
}