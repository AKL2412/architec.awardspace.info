<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seance
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Seance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=255)
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire", type="string", length=255)
     */
    private $horaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Planning", cascade={"persist"})
      * @ORM\JoinColumn(nullable=true)
      */
    private $planning;

    /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Salle", cascade={"persist"})
      * @ORM\JoinColumn(nullable=true)
      */
    private $salle;

    /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Matiere", cascade={"persist"})
      * @ORM\JoinColumn(nullable=true)
      */
    private $matiere;

    /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Professeur", cascade={"persist"})
      * @ORM\JoinColumn(nullable=true)
      */
    private $professeur;


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
     * Set jour
     *
     * @param string $jour
     * @return Seance
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set horaire
     *
     * @param string $horaire
     * @return Seance
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return string 
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Seance
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set planning
     *
     * @param \Intranet\AdminBundle\Entity\Planning $planning
     * @return Seance
     */
    public function setPlanning(\Intranet\AdminBundle\Entity\Planning $planning = null)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return \Intranet\AdminBundle\Entity\Planning 
     */
    public function getPlanning()
    {
        return $this->planning;
    }

    /**
     * Set salle
     *
     * @param \Intranet\AdminBundle\Entity\Salle $salle
     * @return Seance
     */
    public function setSalle(\Intranet\AdminBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \Intranet\AdminBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set matiere
     *
     * @param \Intranet\AdminBundle\Entity\Matiere $matiere
     * @return Seance
     */
    public function setMatiere(\Intranet\AdminBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \Intranet\AdminBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set professeur
     *
     * @param \Intranet\AdminBundle\Entity\Professeur $professeur
     * @return Seance
     */
    public function setProfesseur(\Intranet\AdminBundle\Entity\Professeur $professeur = null)
    {
        $this->professeur = $professeur;

        return $this;
    }

    /**
     * Get professeur
     *
     * @return \Intranet\AdminBundle\Entity\Professeur 
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }
}
