<?php


namespace CourBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idreponse;
    /**
     * @ORM\ManyToOne(targetEntity="serie")
     * @ORM\JoinColumn(name="reponse",referencedColumnName="idserie")
     */
    private $reponse;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lienrep;

    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $noteserier;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commantaire;

    /**
     * @ORM\ManyToOne(targetEntity="EventsBundle\Entity\User")
     * @ORM\JoinColumn(name="user",
     *     referencedColumnName="id",
     *     onDelete="CASCADE")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getIdreponse()
    {
        return $this->idreponse;
    }

    /**
     * @param mixed $idreponse
     */
    public function setIdreponse($idreponse)
    {
        $this->idreponse = $idreponse;
    }

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    }

    /**
     * @return mixed
     */
    public function getLienrep()
    {
        return $this->lienrep;
    }

    /**
     * @param mixed $lienrep
     */
    public function setLienrep($lienrep)
    {
        $this->lienrep = $lienrep;
    }

    /**
     * @return mixed
     */
    public function getNoteserier()
    {
        return $this->noteserier;
    }

    /**
     * @param mixed $noteserier
     */
    public function setNoteserier($noteserier)
    {
        $this->noteserier = $noteserier;
    }

    /**
     * @return mixed
     */
    public function getCommantaire()
    {
        return $this->commantaire;
    }

    /**
     * @param mixed $commantaire
     */
    public function setCommantaire($commantaire)
    {
        $this->commantaire = $commantaire;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



}