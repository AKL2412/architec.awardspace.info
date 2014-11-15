<?php

namespace Intranet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\AdminBundle\Entity\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lu", type="boolean")
     */
    private $lu;

    /**
      * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
    private $send;

    /**
      * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User", cascade={"persist"})
      * @ORM\JoinColumn(nullable=false)
      */
    private $receive;


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
     * Set objet
     *
     * @param string $objet
     * @return Message
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Message
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
     * Set lu
     *
     * @param boolean $lu
     * @return Message
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return boolean 
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * Set send
     *
     * @param \OC\UserBundle\Entity\User $send
     * @return Message
     */
    public function setSend(\OC\UserBundle\Entity\User $send)
    {
        $this->send = $send;

        return $this;
    }

    /**
     * Get send
     *
     * @return \OC\UserBundle\Entity\User 
     */
    public function getSend()
    {
        return $this->send;
    }

    /**
     * Set receive
     *
     * @param \OC\UserBundle\Entity\User $receive
     * @return Message
     */
    public function setReceive(\OC\UserBundle\Entity\User $receive)
    {
        $this->receive = $receive;

        return $this;
    }

    /**
     * Get receive
     *
     * @return \OC\UserBundle\Entity\User 
     */
    public function getReceive()
    {
        return $this->receive;
    }
}
