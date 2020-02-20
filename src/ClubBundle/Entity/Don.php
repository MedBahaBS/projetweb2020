<?php


namespace ClubBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotNull(message="Le champs ne doit pas être vide")
     */
    private $type;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le champs ne doit pas être vide")
     */
    private $description;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le champs ne doit pas être vide")
     */
    private $email;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull(message="Le champs ne doit pas être vide")
     */
    private $etat;
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
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

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



}