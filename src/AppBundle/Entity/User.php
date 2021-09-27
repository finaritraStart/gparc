<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     *
     * @var string
     * 
     */
    private $companyName;
    
    
    /**
     *
     * @var string
     *
     */
    private $fonction;
    
    
    
    
    
    
     /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return User
     */
    public function setcompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get CompanyName
     *
     * @return string
     */
    public function getcompanyName()
    {
        return $this->companyName;
    }
    
    
    
    
    
    
    
     /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return User
     */
    public function setfonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getfonction()
    {
        return $this->fonction;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
