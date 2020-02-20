<?php


namespace GestionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 */

class Classe
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idclasse;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $libelle;


    /**
     * @ORM\Column(type="integer")
     */
    private $Nombreeleve;

    /**
     * @ORM\Column(type="integer")
     */
    private $Numsalle;

    /**
     * @return mixed
     */
    public function getIdclasse()
    {
        return $this->idclasse;
    }

    /**
     * @param mixed $idclasse
     */
    public function setIdclasse($idclasse)
    {
        $this->idclasse = $idclasse;
    }

    /**
     * @return mixed
     */
    public function getNombreeleve()
    {
        return $this->Nombreeleve;
    }

    /**
     * @param mixed $Nombreeleve
     */
    public function setNombreeleve($Nombreeleve)
    {
        $this->Nombreeleve = $Nombreeleve;
    }

    /**
     * @return mixed
     */
    public function getNumsalle()
    {
        return $this->Numsalle;
    }

    /**
     * @param mixed $Numsalle
     */
    public function setNumsalle($Numsalle)
    {
        $this->Numsalle = $Numsalle;
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

}