<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
  private $image;

  /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    public function __construct()
  {
    $this->date = new \Datetime();
    $this->image = "default.jpg";
    $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    $this->enabled = false;
    $this->locked = false;
    $this->expired = false;
    $this->roles = array();
    $this->credentialsExpired = false;

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
     * Set image
     *
     * @param string $image
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return User
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
}
