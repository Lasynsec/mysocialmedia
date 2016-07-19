<?php
	
namespace Lasynsec\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Lasynsec\FrontBundle\Entity\Status;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity;
* @ORM\Table(name="user")
*/
class User
{
	/**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
    * @ORM\OneToMany(targetEntity="Status", mappedBy="user")
    */
    protected $statuses;

    public function __construct()
    {
        //parent::__construct();
<<<<<<< HEAD
        $this->statuses = new ArrayCollection();
=======
        $this->statues = new ArrayCollection();
>>>>>>> origin/master
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Add statuses
     *
     * @param \Lasynsec\FrontBundle\Entity\Status $statuses
     * @return User
     */
    public function addStatue(\Lasynsec\FrontBundle\Entity\Status $statuses)
    {
        $this->statuses[] = $statuses;

        return $this;
    }

    /**
     * Remove statuses
     *
     * @param \Lasynsec\FrontBundle\Entity\Status $statuses
     */
    public function removeStatue(\Lasynsec\FrontBundle\Entity\Status $statuses)
    {
        $this->statuses->removeElement($statuses);
    }

    /**
     * Get statuses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * Add statuses
     *
     * @param \Lasynsec\FrontBundle\Entity\Status $statuses
     * @return User
     */
    public function addStatus(\Lasynsec\FrontBundle\Entity\Status $statuses)
    {
        $this->statuses[] = $statuses;

        return $this;
    }

    /**
     * Remove statuses
     *
     * @param \Lasynsec\FrontBundle\Entity\Status $statuses
     */
    public function removeStatus(\Lasynsec\FrontBundle\Entity\Status $statuses)
    {
        $this->statuses->removeElement($statuses);
    }
}
