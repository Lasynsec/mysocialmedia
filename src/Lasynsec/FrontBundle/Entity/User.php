<?php
	
namespace Lasynsec\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
    * @ORM\OneToMany(targetEntity="Status", mappedBy="user")
    */
    private $statues;

    public function __construct()
    {
        //parent::__construct();
        $this->statues = new ArrayCollection();
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
     * Add statues
     *
     * @param \Lasynsec\FrontBundle\Entity\Status $statues
     * @return User
     */
    public function addStatue(\Lasynsec\FrontBundle\Entity\Status $statues)
    {
        $this->statues[] = $statues;

        return $this;
    }

    /**
     * Remove statues
     *
     * @param \Lasynsec\FrontBundle\Entity\Status $statues
     */
    public function removeStatue(\Lasynsec\FrontBundle\Entity\Status $statues)
    {
        $this->statues->removeElement($statues);
    }

    /**
     * Get statues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStatues()
    {
        return $this->statues;
    }
}
