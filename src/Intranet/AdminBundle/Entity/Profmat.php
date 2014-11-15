<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profmat
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Profmat
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

     /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Professeur", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
    private $professeur;
    /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Matiere", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
    private $matiere;

     public function __construct()
  {
    $this->date = new \Datetime();

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
     * Set date
     *
     * @param \DateTime $date
     * @return Profmat
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
     * Set professeur
     *
     * @param \Intranet\AdminBundle\Entity\Professeur $professeur
     * @return Profmat
     */
    public function setProfesseur(\Intranet\AdminBundle\Entity\Professeur $professeur)
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

    /**
     * Set matiere
     *
     * @param \Intranet\AdminBundle\Entity\Matiere $matiere
     * @return Profmat
     */
    public function setMatiere(\Intranet\AdminBundle\Entity\Matiere $matiere)
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
}
