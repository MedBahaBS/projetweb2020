<?php


namespace CourBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @ORM\Entity
 */
class Panier
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idpanier;



    /**
     * One panier has One eleve
     * @ORM\OneToOne(targetEntity="EventsBundle\Entity\User", inversedBy="panier")
     * @ORM\JoinColumn(name="eleve", referencedColumnName="id")

     */
    private $eleve;

    /**
     * Many panier have Many serie.
     * @ORM\ManyToMany(targetEntity="serie", inversedBy="panieserie")
     * @ORM\JoinTable(name="panier_serie",
     *      joinColumns={@ORM\JoinColumn(name="panier_id", referencedColumnName="idpanier")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="serie_id", referencedColumnName="idserie")}
     *      )
     */
    private $seriess;

    public function __construct() {
        $this->seriess= new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addSerie(serie $serie ): self
    {
        if (!$this->seriess->contains($serie )) {
            $this->seriess[] = $serie ;
        }
        return $this;
    }
    public function removeSerie(serie $serie ): self
    {
        if ($this->seriess->contains($serie )) {
            $this->seriess->removeElement($serie );
        }
        return $this;
    }
    /**
     * @return mixed
     */
    public function getIdpanier()
    {
        return $this->idpanier;
    }

    /**
     * @param mixed $idpanier
     */
    public function setIdpanier($idpanier)
    {
        $this->idpanier = $idpanier;
    }

    /**
     * @return mixed
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * @param mixed $eleve
     */
    public function setEleve($eleve)
    {
        $this->eleve = $eleve;
    }

    /**
     * @return mixed
     */
    public function getSeriess()
    {
        return $this->seriess;
    }

    /**
     * @param mixed $seriess
     */
    public function setSeriess($seriess)
    {
        $this->seriess = $seriess;
    }





}