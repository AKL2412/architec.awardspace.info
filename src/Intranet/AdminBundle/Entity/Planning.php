<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Planning
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
      * @ORM\ManyToOne(targetEntity="Intranet\AdminBundle\Entity\Classe", cascade={"persist"})
      * @ORM\JoinColumn(nullable=true)
      */
    private $classe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var boolean
     *
     * @ORM\Column(name="complet", type="boolean")
     */
    private $complet;

    /**
* @ORM\OneToMany(targetEntity="Intranet\AdminBundle\Entity\Seance",mappedBy="planning")
*/
private $cases;
    

    public function lesjours(){
        return array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');
    }
    public function leshoraires(){
        return array('8h-10h','10h-12h','14h-16h','16h-18h');
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
     * @return Planning
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
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Planning
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
     * @return Planning
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
     * Set classe
     *
     * @param \Intranet\AdminBundle\Entity\Classe $classe
     * @return Planning
     */
    public function setClasse(\Intranet\AdminBundle\Entity\Classe $classe = null)
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
     * Set created
     *
     * @param \DateTime $created
     * @return Planning
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set complet
     *
     * @param boolean $complet
     * @return Planning
     */
    public function setComplet($complet)
    {
        $this->complet = $complet;

        return $this;
    }

    /**
     * Get complet
     *
     * @return boolean 
     */
    public function getComplet()
    {
        return $this->complet;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cases = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cases
     *
     * @param \Intranet\AdminBundle\Entity\Seance $cases
     * @return Planning
     */
    public function addCase(\Intranet\AdminBundle\Entity\Seance $cases)
    {
        $this->cases[] = $cases;

        return $this;
    }

    /**
     * Remove cases
     *
     * @param \Intranet\AdminBundle\Entity\Seance $cases
     */
    public function removeCase(\Intranet\AdminBundle\Entity\Seance $cases)
    {
        $this->cases->removeElement($cases);
    }

    /**
     * Get cases
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCases()
    {
        return $this->cases;
    }
}
