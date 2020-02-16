<?php


namespace CourBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class cours
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idcour;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveau;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matiere;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomchapitre;
    /**
     * @ORM\Column(type="date", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;
    /**
     * @ORM\ManyToOne(targetEntity="serie")
     * @ORM\JoinColumn(name="series",referencedColumnName="idserie")
     */
    private $series;

    /**
     * @return mixed
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param mixed $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @return mixed
     */




    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @param mixed $lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    }



    /**
     * @return mixed
     */
    public function getIdcour()
    {
        return $this->idcour;
    }

    /**
     * @param mixed $idcour
     */
    public function setIdcour($idcour)
    {
        $this->idcour = $idcour;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * @param mixed $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    /**
     * @return mixed
     */
    public function getNomchapitre()
    {
        return $this->nomchapitre;
    }

    /**
     * @param mixed $nomchapitre
     */
    public function setNomchapitre($nomchapitre)
    {
        $this->nomchapitre = $nomchapitre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

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


}