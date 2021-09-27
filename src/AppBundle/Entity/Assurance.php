<?php

namespace AppBundle\Entity;

/**
 * Assurance
 */
class Assurance
{
    /**
     * @var int
     */
    private $id;
     /**
     * @var string
     */
    private $immatricule;

    /**
     * @var string
     */
    private $typeAssurance;

    /**
     * @var \DateTime
     */
    private $dateAquisition;

    /**
     * @var \DateTime
     */
    private $dateExpiration;

    /**
     * @var string
     */
    private $compagnieAssurance;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    
    
    
    /**
     * Set immatricule
     *
     * @param string $immatricule
     *
     * @return Assurance
     */
    public function setimmatricule($immatricule)
    {
        $this->immatricule = $immatricule;

        return $this;
    }

    /**
     * Get immatricule
     *
     * @return string
     */
    public function getimmatricule()
    {
        return $this->immatricule;
    }
    
    
    
    
    
    /**
     * Set typeAssurance
     *
     * @param string $typeAssurance
     *
     * @return Assurance
     */
    public function setTypeAssurance($typeAssurance)
    {
        $this->typeAssurance = $typeAssurance;

        return $this;
    }

    /**
     * Get typeAssurance
     *
     * @return string
     */
    public function getTypeAssurance()
    {
        return $this->typeAssurance;
    }

    /**
     * Set dateAquisition
     *
     * @param \DateTime $dateAquisition
     *
     * @return Assurance
     */
    public function setDateAquisition($dateAquisition)
    {
        $this->dateAquisition = $dateAquisition;

        return $this;
    }

    /**
     * Get dateAquisition
     *
     * @return \DateTime
     */
    public function getDateAquisition()
    {
        return $this->dateAquisition;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     *
     * @return Assurance
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set compagnieAssurance
     *
     * @param string $compagnieAssurance
     *
     * @return Assurance
     */
    public function setCompagnieAssurance($compagnieAssurance)
    {
        $this->compagnieAssurance = $compagnieAssurance;

        return $this;
    }

    /**
     * Get compagnieAssurance
     *
     * @return string
     */
    public function getCompagnieAssurance()
    {
        return $this->compagnieAssurance;
    }
}
