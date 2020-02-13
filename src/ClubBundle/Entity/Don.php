<?php


namespace ClubBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Don
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;
    /**
     * @ORM\Column(type="integer")
     */
    private $Somme;
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumn(name="club",referencedColumnName="id")
     */
    private $club;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getSomme()
    {
        return $this->Somme;
    }

    /**
     * @param mixed $Somme
     */
    public function setSomme($Somme)
    {
        $this->Somme = $Somme;
    }

    /**
     * @return mixed
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param mixed $club
     */
    public function setClub($club)
    {
        $this->club = $club;
    }



}