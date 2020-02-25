<?php

namespace cantineFrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="cantineFrontBundle\Repository\commentaireRepository")
 */
class commentaire
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
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @return \cantineBundle\Entity\menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param \cantineBundle\Entity\menu  $menu
     */
    public function setMenu(\cantineBundle\Entity\menu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="cantineBundle\Entity\menu", cascade={"remove"})
     * @ORM\JoinColumn(name="menu_id",referencedColumnName="id",onDelete="CASCADE")
     */
    private $menu;
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", cascade={"remove"})
     * @ORM\JoinColumn(name="user",referencedColumnName="id",onDelete="CASCADE")
     */
    private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return commentaire
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
}

