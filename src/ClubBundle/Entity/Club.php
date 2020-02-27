<?php


namespace ClubBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Club
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
    private $Nom;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Responsable;

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
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->Responsable;
    }

    /**
     * @param mixed $Responsable
     */
    public function setResponsable($Responsable)
    {
        $this->Responsable = $Responsable;
    }

}