<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * vehicule
 */
class vehicule
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var blob
     */
    private $vehicule;

    /**
     * @var string
     */
    private $immatricule;

    /**
     * @var string
     */
    private $marque;

    /**
     * @var string
     */
    private $modele;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $puissance;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var \DateTime
     */
    private $dateAcquisition;

    /**
     * @var string
     */
    private $etatDuVehicule;

    /**
     * @var string
     */
    private $consommationKm;

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $nombreDePorte;

    /**
     * @var string
     */
    private $nombreDePlace;

    /**
     * @var string
     */
    private $poidsMaximalSupportable;


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
     * Set vehicule
     *
     * @param blob $vehicule
     *
     * @return vehicule
     */
    public function setvehicule($vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return blob
     */
    public function getvehicule()
    {
        return $this->vehicule;
    }
    
    

    /**
     * Set immatricule
     *
     * @param string $immatricule
     *
     * @return vehicule
     */
    public function setImmatricule($immatricule)
    {
        $this->immatricule = $immatricule;

        return $this;
    }

    /**
     * Get immatricule
     *
     * @return string
     */
    public function getImmatricule()
    {
        return $this->immatricule;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return vehicule
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return vehicule
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set puissance
     *
     * @param string $puissance
     *
     * @return vehicule
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return string
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return vehicule
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set dateAcquisition
     *
     * @param \DateTime $dateAcquisition
     *
     * @return vehicule
     */
    public function setDateAcquisition($dateAcquisition)
    {
        $this->dateAcquisition = $dateAcquisition;

        return $this;
    }

    /**
     * Get dateAcquisition
     *
     * @return \DateTime
     */
    public function getDateAcquisition()
    {
        return $this->dateAcquisition;
    }

    /**
     * Set etatDuVehicule
     *
     * @param string $etatDuVehicule
     *
     * @return vehicule
     */
    public function setEtatDuVehicule($etatDuVehicule)
    {
        $this->etatDuVehicule = $etatDuVehicule;

        return $this;
    }

    /**
     * Get etatDuVehicule
     *
     * @return string
     */
    public function getEtatDuVehicule()
    {
        return $this->etatDuVehicule;
    }

    /**
     * Set consommationKm
     *
     * @param string $consommationKm
     *
     * @return vehicule
     */
    public function setConsommationKm($consommationKm)
    {
        $this->consommationKm = $consommationKm;

        return $this;
    }

    /**
     * Get consommationKm
     *
     * @return string
     */
    public function getConsommationKm()
    {
        return $this->consommationKm;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return vehicule
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set nombreDePorte
     *
     * @param string $nombreDePorte
     *
     * @return vehicule
     */
    public function setNombreDePorte($nombreDePorte)
    {
        $this->nombreDePorte = $nombreDePorte;

        return $this;
    }

    /**
     * Get nombreDePorte
     *
     * @return string
     */
    public function getNombreDePorte()
    {
        return $this->nombreDePorte;
    }

    /**
     * Set nombreDePlace
     *
     * @param string $nombreDePlace
     *
     * @return vehicule
     */
    public function setNombreDePlace($nombreDePlace)
    {
        $this->nombreDePlace = $nombreDePlace;

        return $this;
    }

    /**
     * Get nombreDePlace
     *
     * @return string
     */
    public function getNombreDePlace()
    {
        return $this->nombreDePlace;
    }

    /**
     * Set poidsMaximalSupportable
     *
     * @param string $poidsMaximalSupportable
     *
     * @return vehicule
     */
    public function setPoidsMaximalSupportable($poidsMaximalSupportable)
    {
        $this->poidsMaximalSupportable = $poidsMaximalSupportable;

        return $this;
    }

    /**
     * Get poidsMaximalSupportable
     *
     * @return string
     */
    public function getPoidsMaximalSupportable()
    {
        return $this->poidsMaximalSupportable;
    }

}
