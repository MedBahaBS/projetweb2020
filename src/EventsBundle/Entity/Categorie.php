<?php


namespace EventsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** @ORM\Entity(repositoryClass="EventsBundle\Repository\CategorieRepository")
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
     * @Assert\NotNull(message="Le champs libelle ne doit pas être vide")
     */
 private $libelle;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le champs description ne doit pas être vide")
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