<?php

namespace cantineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="cantineBundle\Repository\menuRepository")
 */
class menu
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
     * @ORM\Column(name="jourMenu", type="string", length=255)
     */
    private $jourMenu;

    /**
     * @return mixed
     */
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * @param mixed $entree
     */
    public function setEntree($entree)
    {
        $this->entree = $entree;
    }

    /**
     * @ORM\ManyToOne(targetEntity="plat", cascade={"remove"})
     * @ORM\JoinColumn(name="entree",referencedColumnName="id",onDelete="CASCADE")
     */
    private $entree;

    /**
     * @return mixed
     */
    public function getPlatprincipal()
    {
        return $this->platprincipal;
    }

    /**
     * @param mixed $platprincipal
     */
    public function setPlatprincipal($platprincipal)
    {
        $this->platprincipal = $platprincipal;
    }

    /**
     * @ORM\ManyToOne(targetEntity="plat", cascade={"remove"})
     * @ORM\JoinColumn(name="platprincipal",referencedColumnName="id",onDelete="CASCADE")
     */
    private $platprincipal;

    /**
     * @return mixed
     */
    public function getDessert()
    {
        return $this->dessert;
    }

    /**
     * @param mixed $dessert
     */
    public function setDessert($dessert)
    {
        $this->dessert = $dessert;
    }
    /**
     * @ORM\ManyToOne(targetEntity="plat", cascade={"remove"})
     * @ORM\JoinColumn(name="dessert",referencedColumnName="id",onDelete="CASCADE")
     */
    private $dessert;

    /**
     * @return mixed
     */
    public function getPlat()
    {
        return $this->plat;
    }

    /**
     * @param mixed $plat
     */
    public function setPlat($plat)
    {
        $this->plat = $plat;
    }
    /**
     * @ORM\ManyToOne(targetEntity="plat")
     * @ORM\JoinColumn(name="plat_id",referencedColumnName="id")
     */
    private $plat;

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
     * Set jourMenu
     *
     * @param string $jourMenu
     *
     * @return menu
     */
    public function setJourMenu($jourMenu)
    {
        $this->jourMenu = $jourMenu;

        return $this;
    }

    /**
     * Get jourMenu
     *
     * @return string
     */
    public function getJourMenu()
    {
        return $this->jourMenu;
    }



}

