<?php


namespace ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Note
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Idnote;


    /**
     * @ORM\Column(type="float")
     */
    private $note1;
    /**
     * @ORM\Column(type="float")
     */
    private $note2;
    /**
     * @ORM\Column(type="float")
     */
    private $moyenne;
    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     * @ORM\JoinColumn(name="Matiere",referencedColumnName="idmatiere")
     */
    private $Matiere;
    /**
     * @ORM\ManyToOne(targetEntity="\EventsBundle\Entity\User")
     * @ORM\JoinColumn(name="eleve",referencedColumnName="id")
     */

    private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="\GestionBundle\Entity\Classe")
     * @ORM\JoinColumn(name="classe",referencedColumnName="idclasse",nullable=true)
     */

    private $classe;

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $classe
     */
    public function setClasse($classe): void
    {
        $this->classe = $classe;
    }


    /**
     * @return mixed
     */
    public function getEleve()
    {
        return $this->eleve;
    }
    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->Matiere;
    }

    /**
     * @param mixed $Matiere
     */
    public function setMatiere($Matiere)
    {
        $this->Matiere = $Matiere;
    }

    /**
     * @param mixed $eleve
     */
    public function setEleve($eleve): void
    {
        $this->eleve = $eleve;
    }


    /**
     * @return mixed
     */
    public function getIdnote()
    {
        return $this->Idnote;
    }

    /**
     * @param mixed $Idnote
     */
    public function setIdnote($Idnote)
    {
        $this->Idnote = $Idnote;
    }

    /**
     * @return mixed
     */
    public function getNote1()
    {
        return $this->note1;
    }

    /**
     * @param mixed $note1
     */
    public function setNote1($note1)
    {
        $this->note1 = $note1;
    }

    /**
     * @return mixed
     */
    public function getNote2()
    {
        return $this->note2;
    }

    /**
     * @param mixed $note2
     */
    public function setNote2($note2)
    {
        $this->note2 = $note2;
    }

    /**
     * @return mixed
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * @param mixed $moyenne
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;
    }


}