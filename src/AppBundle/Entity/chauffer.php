<?php

namespace AppBundle\Entity;

/**
 * chauffer
 */
class chauffer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $cINChauffer;

    /**
     * @var string
     */
    private $nomChauffer;

    /**
     * @var string
     */
    private $prenomChauffer;

    /**
     * @var string
     */
    private $numPermisConduire;

    /**
     * @var \DateTime
     */
    private $dteDeNaissance;

    /**
     * @var string
     */
    private $fonction;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $adresseMail;


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
     * Set cINChauffer
     *
     * @param string $cINChauffer
     *
     * @return chauffer
     */
    public function setCINChauffer($cINChauffer)
    {
        $this->cINChauffer = $cINChauffer;

        return $this;
    }

    /**
     * Get cINChauffer
     *
     * @return string
     */
    public function getCINChauffer()
    {
        return $this->cINChauffer;
    }

    /**
     * Set nomChauffer
     *
     * @param string $nomChauffer
     *
     * @return chauffer
     */
    public function setNomChauffer($nomChauffer)
    {
        $this->nomChauffer = $nomChauffer;

        return $this;
    }

    /**
     * Get nomChauffer
     *
     * @return string
     */
    public function getNomChauffer()
    {
        return $this->nomChauffer;
    }

    /**
     * Set prenomChauffer
     *
     * @param string $prenomChauffer
     *
     * @return chauffer
     */
    public function setPrenomChauffer($prenomChauffer)
    {
        $this->prenomChauffer = $prenomChauffer;

        return $this;
    }

    /**
     * Get prenomChauffer
     *
     * @return string
     */
    public function getPrenomChauffer()
    {
        return $this->prenomChauffer;
    }

    /**
     * Set numPermisConduire
     *
     * @param string $numPermisConduire
     *
     * @return chauffer
     */
    public function setNumPermisConduire($numPermisConduire)
    {
        $this->numPermisConduire = $numPermisConduire;

        return $this;
    }

    /**
     * Get numPermisConduire
     *
     * @return string
     */
    public function getNumPermisConduire()
    {
        return $this->numPermisConduire;
    }

    /**
     * Set dteDeNaissance
     *
     * @param \DateTime $dteDeNaissance
     *
     * @return chauffer
     */
    public function setDteDeNaissance($dteDeNaissance)
    {
        $this->dteDeNaissance = $dteDeNaissance;

        return $this;
    }

    /**
     * Get dteDeNaissance
     *
     * @return \DateTime
     */
    public function getDteDeNaissance()
    {
        return $this->dteDeNaissance;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return chauffer
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return chauffer
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return chauffer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set adresseMail
     *
     * @param string $adresseMail
     *
     * @return chauffer
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }

    /**
     * Get adresseMail
     *
     * @return string
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }
}
