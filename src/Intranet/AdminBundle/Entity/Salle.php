<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Salle
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
* @ORM\OneToMany(targetEntity="Intranet\AdminBundle\Entity\Seance",mappedBy="salle")
*/
private $seances;

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
     * @return Salle
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
     * Set date
     *
     * @param \DateTime $date
     * @return Salle
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
     * Constructor
     */
    public function __construct()
    {
        $this->seances = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add seances
     *
     * @param \Intranet\AdminBundle\Entity\Seance $seances
     * @return Salle
     */
    public function addSeance(\Intranet\AdminBundle\Entity\Seance $seances)
    {
        $this->seances[] = $seances;

        return $this;
    }

    /**
     * Remove seances
     *
     * @param \Intranet\AdminBundle\Entity\Seance $seances
     */
    public function removeSeance(\Intranet\AdminBundle\Entity\Seance $seances)
    {
        $this->seances->removeElement($seances);
    }

    /**
     * Get seances
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeances()
    {
        return $this->seances;
    }
}
