<?php


namespace EventsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
 *
 */

class Categorie
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
 private $idcategorie;
    /**
     * @ORM\Column(type="string", length=255)
     */
 private $libelle;
    /**
     * @ORM\Column(type="string", length=255)
     */
 private $description;
    /**
     * @return mixed
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * @param mixed $idcategorie
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
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