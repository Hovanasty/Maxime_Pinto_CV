<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experiences
 *
 * @ORM\Table(name="experiences")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExperiencesRepository")
 */
class Experiences
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
     * @ORM\Column(name="entrprise", type="text")
     */
    private $entrprise;

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
     * @return Experiences
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
     * @return Experiences
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
     * @return Experiences
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
     * Set entrprise
     *
     * @param string $entrprise
     *
     * @return Experiences
     */
    public function setEntrprise($entrprise)
    {
        $this->entrprise = $entrprise;

        return $this;
    }

    /**
     * Get entrprise
     *
     * @return string
     */
    public function getEntrprise()
    {
        return $this->entrprise;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Experiences
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

