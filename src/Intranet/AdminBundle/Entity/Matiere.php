<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Matiere
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
      * @ORM\ManyToMany(targetEntity="Intranet\AdminBundle\Entity\Filiere", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
    private $filieres;

    /**
* @ORM\OneToMany(targetEntity="Intranet\AdminBundle\Entity\Profmat",mappedBy="matiere")
*/
private $professeurs;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profeseurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function estFiliere(\Intranet\AdminBundle\Entity\Filiere $filiere){
        foreach ($this->filieres as $key => $fil) {
            if($fil == $filiere) return true;
        }
        return false;
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
     * Set nom
     *
     * @param string $nom
     * @return Matiere
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Matiere
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add filieres
     *
     * @param \Intranet\AdminBundle\Entity\Filiere $filieres
     * @return Matiere
     */
    public function addFiliere(\Intranet\AdminBundle\Entity\Filiere $filieres)
    {
        $this->filieres[] = $filieres;

        return $this;
    }

    /**
     * Remove filieres
     *
     * @param \Intranet\AdminBundle\Entity\Filiere $filieres
     */
    public function removeFiliere(\Intranet\AdminBundle\Entity\Filiere $filieres)
    {
        $this->filieres->removeElement($filieres);
    }

    /**
     * Get filieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilieres()
    {
        return $this->filieres;
    }

    /**
     * Add profeseurs
     *
     * @param \Intranet\AdminBundle\Entity\Profmat $profeseurs
     * @return Matiere
     */
    public function addProfeseur(\Intranet\AdminBundle\Entity\Profmat $profeseurs)
    {
        $this->profeseurs[] = $profeseurs;

        return $this;
    }

    /**
     * Remove profeseurs
     *
     * @param \Intranet\AdminBundle\Entity\Profmat $profeseurs
     */
    public function removeProfeseur(\Intranet\AdminBundle\Entity\Profmat $profeseurs)
    {
        $this->profeseurs->removeElement($profeseurs);
    }

    /**
     * Get profeseurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfeseurs()
    {
        return $this->profeseurs;
    }

    /**
     * Add professeurs
     *
     * @param \Intranet\AdminBundle\Entity\Profmat $professeurs
     * @return Matiere
     */
    public function addProfesseur(\Intranet\AdminBundle\Entity\Profmat $professeurs)
    {
        $this->professeurs[] = $professeurs;

        return $this;
    }

    /**
     * Remove professeurs
     *
     * @param \Intranet\AdminBundle\Entity\Profmat $professeurs
     */
    public function removeProfesseur(\Intranet\AdminBundle\Entity\Profmat $professeurs)
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
