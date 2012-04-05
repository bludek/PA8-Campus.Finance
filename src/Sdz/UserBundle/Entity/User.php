<?php

namespace Sdz\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Sdz\UserBundle\Entity\User
 *           
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\UserBundle\Entity\UserRepository")  
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id  
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string first_name
     * @ORM\Column(name="first_name", type="string", length=50, nullable="true")
     */
    protected $first_name;
    
    /**
     * @var string $last_name
     * @ORM\Column(name="last_name", type="string", length=50, nullable="true")
     */
    protected $last_name;
    
    /**
     * @var datetime $birthday
     * @ORM\Column(name="birthday", type="datetime", nullable="true")
     */
    protected $birthday;
    
    /**
     * @var string $locality
     * @ORM\Column(name="locality", type="string", length=50, nullable="true")
     */
    protected $locality;
	
	
	public function __construct()
	{
		$path = '../../Sites';
		
		parent::__construct();
		if (!file_exists ($path))
		{
			mkdir($path);       
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
    
    /**
     * Get Birthday
     *  
     * @return Datetime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
    
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
    
    /**
     * Get Locality
     * 
     * @return String 
     */
    public function getLocality()
    {
        return $this->locality;
    }
    
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }
    
    /**
     * Get first_name
     * 
     * @return String 
     */
    public function getFirstName()
    {
        return $this->first_name; 
    }
    
    public function setFirstName($firt_name)
    {
        $this->first_name = $firt_name;
    }
    
    /**
     * Get last_name
     * 
     * @return String 
     */
    public function getLastName()
    {
        return $this->last_name; 
    }
    
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }
}