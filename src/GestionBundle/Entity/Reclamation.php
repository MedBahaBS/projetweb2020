<?php

namespace GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 */

class Reclamation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateReclamation", type="date")
     */
    private $dateReclamation;

    /**
     * @var string
     * @ORM\Column(name="typeReclamation", type="string", length=255)
     */
    private $typeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuReclamation", type="string", length=255)
     */
    private $contenuReclamation;

    /**
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumn(name="Classe",referencedColumnName="idclasse")
     */
    private $Classe;


    /**
     * @ORM\ManyToOne(targetEntity="EventsBundle\Entity\User", inversedBy="reclamations")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="target_id", type="integer",nullable=true)
     */
    private $target_id;

    /**
     * @return int
     */
    public function getTarget_id()
    {
        return $this->target_id;
    }

    /**
     * @param int $target_id
     */
    public function setTarget_id($target_id)
    {
        $this->target_id = $target_id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string")
     */
    private $etat;

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * Set user
     *
     * @param \EventsBundle\Entity\User $user
     *
     * @return Reclamation
     */
    public function setUser(\EventsBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EventsBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }



    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->Classe;
    }

    /**
     * @param mixed $Classe
     */
    public function setClasse($Classe)
    {
        $this->Classe = $Classe;
    }


    /**
     * @ORM\OneToOne(targetEntity="Archive", mappedBy="Reclamation")
     */
    private $archive;

    /**
     * @return mixed
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * @param mixed $archive
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;
    }


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
     * Set dateReclamation
     *
     * @param \DateTime $dateReclamation
     *
     * @return Reclamation
     */
    public function setDateReclamation($dateReclamation)
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    /**
     * Get dateReclamation
     *
     * @return \DateTime
     */
    public function getDateReclamation()
    {
        return $this->dateReclamation;
    }

    /**
     * Set typeReclamation
     *
     * @param string $typeReclamation
     *
     * @return Reclamation
     */
    public function setTypeReclamation($typeReclamation)
    {
        $this->typeReclamation = $typeReclamation;

        return $this;
    }

    /**
     * Get typeReclamation
     *
     * @return string
     */
    public function getTypeReclamation()
    {
        return $this->typeReclamation;
    }

    /**
     * Set contenuReclamation
     *
     * @param string $contenuReclamation
     *
     * @return Reclamation
     */
    public function setContenuReclamation($contenuReclamation)
    {
        $this->contenuReclamation = $contenuReclamation;

        return $this;
    }

    /**
     * Get contenuReclamation
     *
     * @return string
     */
    public function getContenuReclamation()
    {
        return $this->contenuReclamation;
    }



}

