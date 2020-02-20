<?php


namespace ScolariteBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Matiere
{
    /**
 * @ORM\Column(type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $Idmatiere;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbrseance;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="float")
     */
    private $coefficient;

    /**
     * @return mixed
     */
    public function getIdmatiere()
    {
        return $this->Idmatiere;
    }

    /**
     * @param mixed $Idmatiere
     */
    public function setIdmatiere($Idmatiere)
    {
        $this->Idmatiere = $Idmatiere;
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

    public function getNbrseance()
    {
        return $this->nbrseance;
    }

    /**
     * @param mixed $nbrseance
     */
    public function setNbrseance($nbrseance)
    {
        $this->nbrseance = $nbrseance;
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

    /**
     * @return mixed
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * @param mixed $coefficient
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
    }


}