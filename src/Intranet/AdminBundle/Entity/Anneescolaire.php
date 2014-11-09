<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anneescolaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\AdminBundle\Entity\AnneescolaireRepository")
 */
class Anneescolaire
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
     * @ORM\Column(name="annee", type="string", length=255,unique=true)
     */
    private $annee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="encours", type="boolean")
     */
    private $encours;

    /**
* @ORM\OneToMany(targetEntity="Intranet\AdminBundle\Entity\Classe",mappedBy="anneescolaire")
*/
private $classes;

/**
* @ORM\OneToMany(targetEntity="Intranet\AdminBundle\Entity\Etudiant",mappedBy="anneescolaire")
*/
private $etudiants;

/**
* @ORM\OneToMany(targetEntity="Intranet\AdminBundle\Entity\Professeur",mappedBy="anneescolaire")
*/
private $professeurs;

public function __construct()
  {
    $this->encours = true;

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
     * Set annee
     *
     * @param string $annee
     * @return Anneescolaire
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Anneescolaire
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Anneescolaire
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set encours
     *
     * @param boolean $encours
     * @return Anneescolaire
     */
    public function setEncours($encours)
    {
        $this->encours = $encours;

        return $this;
    }

    /**
     * Get encours
     *
     * @return boolean 
     */
    public function getEncours()
    {
        return $this->encours;
    }

    /**
     * Add classes
     *
     * @param \Intranet\AdminBundle\Entity\Classe $classes
     * @return Anneescolaire
     */
    public function addClass(\Intranet\AdminBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;

        return $this;
    }

    /**
     * Remove classes
     *
     * @param \Intranet\AdminBundle\Entity\Classe $classes
     */
    public function removeClass(\Intranet\AdminBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Add etudiants
     *
     * @param \Intranet\AdminBundle\Entity\Etudiant $etudiants
     * @return Anneescolaire
     */
    public function addEtudiant(\Intranet\AdminBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants[] = $etudiants;

        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \Intranet\AdminBundle\Entity\Etudiant $etudiants
     */
    public function removeEtudiant(\Intranet\AdminBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }

    /**
     * Add professeurs
     *
     * @param \Intranet\AdminBundle\Entity\Professeur $professeurs
     * @return Anneescolaire
     */
    public function addProfesseur(\Intranet\AdminBundle\Entity\Professeur $professeurs)
    {
        $this->professeurs[] = $professeurs;

        return $this;
    }

    /**
     * Remove professeurs
     *
     * @param \Intranet\AdminBundle\Entity\Professeur $professeurs
     */
    public function removeProfesseur(\Intranet\AdminBundle\Entity\Professeur $professeurs)
    {
        $this->professeurs->removeElement($professeurs);
    }

    /**
     * Get professeurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesseurs()
    {
        return $this->professeurs;
    }
}
