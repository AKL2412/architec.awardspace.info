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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=100,unique=true)
     */
    private $code;

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
     * Set code
     *
     * @param string $code
     * @return Anneescolaire
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
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
}
