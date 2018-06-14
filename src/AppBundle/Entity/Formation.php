<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationRepository")
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_debut", type="date")
     */
    private $dateDeDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_fin", type="date")
     */
    private $dateDeFin;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="text")
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="institu", type="text")
     */
    private $institu;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="text")
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


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
     * Set dateDeDebut
     *
     * @param \DateTime $dateDeDebut
     *
     * @return Formation
     */
    public function setDateDeDebut($dateDeDebut)
    {
        $this->dateDeDebut = $dateDeDebut;

        return $this;
    }

    /**
     * Get dateDeDebut
     *
     * @return \DateTime
     */
    public function getDateDeDebut()
    {
        return $this->dateDeDebut;
    }

    /**
     * Set dateDeFin
     *
     * @param \DateTime $dateDeFin
     *
     * @return Formation
     */
    public function setDateDeFin($dateDeFin)
    {
        $this->dateDeFin = $dateDeFin;

        return $this;
    }

    /**
     * Get dateDeFin
     *
     * @return \DateTime
     */
    public function getDateDeFin()
    {
        return $this->dateDeFin;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Formation
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set institu
     *
     * @param string $institu
     *
     * @return Formation
     */
    public function setInstitu($institu)
    {
        $this->institu = $institu;

        return $this;
    }

    /**
     * Get institu
     *
     * @return string
     */
    public function getInstitu()
    {
        return $this->institu;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Formation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Formation
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}

