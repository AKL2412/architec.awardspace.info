<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classeetudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\AdminBundle\Entity\ClasseetudiantRepository")
 */
class Classeetudiant
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
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Etudiant", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
    private $etudiant;
    /**
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Classe", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
    private $classe;

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
     * @return Classeetudiant
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
     * Set etudiant
     *
     * @param \Intranet\AdminBundle\Entity\Etudiant $etudiant
     * @return Classeetudiant
     */
    public function setEtudiant(\Intranet\AdminBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Intranet\AdminBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set classe
     *
     * @param \Intranet\AdminBundle\Entity\Classe $classe
     * @return Classeetudiant
     */
    public function setClasse(\Intranet\AdminBundle\Entity\Classe $classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \Intranet\AdminBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Classeetudiant
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
