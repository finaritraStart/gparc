<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 *
 * Mission
 *
 *
 */
class Mission
{
     
    /**
     * @var int
     
     */
    private $id;

    /**
     * @var string
     * 
     */
    private $typeDeMission;

    /**
     * @var string
     */
    private $objectif;

    /**
     * @var string
     */
    private $nombreDeJours;

    /**
     * @var \DateTime
     */
    private $dateDepart;

    /**
     * @var string
     */
    private $kilometrageDepart;

    /**
     * @var string
     */
    private $lieuArrive;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateRetour;

    /**
     * @var string
     */
    private $kilometrageRetour;

    /**
     * @var \DateTime
     */
    private $dateFin;
    
    

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
     * Set typeDeMission
     *
     * @param string $typeDeMission
     *
     * @return Mission
     */
    public function setTypeDeMission($typeDeMission)
    {
        $this->typeDeMission = $typeDeMission;

        return $this;
    }

    /**
     * Get typeDeMission
     *
     * @return string
     */
    public function getTypeDeMission()
    {
        return $this->typeDeMission;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     *
     * @return Mission
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return string
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set nombreDeJours
     *
     * @param string $nombreDeJours
     *
     * @return Mission
     */
    public function setNombreDeJours($nombreDeJours)
    {
        $this->nombreDeJours = $nombreDeJours;

        return $this;
    }

    /**
     * Get nombreDeJours
     *
     * @return string
     */
    public function getNombreDeJours()
    {
        return $this->nombreDeJours;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Mission
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set kilometrageDepart
     *
     * @param string $kilometrageDepart
     *
     * @return Mission
     */
    public function setKilometrageDepart($kilometrageDepart)
    {
        $this->kilometrageDepart = $kilometrageDepart;

        return $this;
    }

    /**
     * Get kilometrageDepart
     *
     * @return string
     */
    public function getKilometrageDepart()
    {
        return $this->kilometrageDepart;
    }

    /**
     * Set lieuArrive
     *
     * @param string $lieuArrive
     *
     * @return Mission
     */
    public function setLieuArrive($lieuArrive)
    {
        $this->lieuArrive = $lieuArrive;

        return $this;
    }

    /**
     * Get lieuArrive
     *
     * @return string
     */
    public function getLieuArrive()
    {
        return $this->lieuArrive;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Mission
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     *
     * @return Mission
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set kilometrageRetour
     *
     * @param string $kilometrageRetour
     *
     * @return Mission
     */
    public function setKilometrageRetour($kilometrageRetour)
    {
        $this->kilometrageRetour = $kilometrageRetour;

        return $this;
    }

    /**
     * Get kilometrageRetour
     *
     * @return string
     */
    public function getKilometrageRetour()
    {
        return $this->kilometrageRetour;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Mission
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
    
    
    
     
}
