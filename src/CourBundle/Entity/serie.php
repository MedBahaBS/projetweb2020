<?php


namespace CourBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class serie
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idserie;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomserie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @return mixed
     */

    /**
     * @ORM\ManyToOne(targetEntity="cours", inversedBy="series")
     * @ORM\JoinColumn(name="cour",referencedColumnName="idcour")
     */
    private $cour;

    /**
     * Many series have Many panier.
     * @ORM\ManyToMany(targetEntity="Panier", mappedBy="seriess")
     */
    private $panieserie;

    /**
     * @ORM\OneToMany(targetEntity="Reponse", mappedBy="reponse", cascade={"remove"})
     */
    private $reponses;


    public function __construct() {
        $this->panieserie = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getCour()
    {
        return $this->cour;
    }

    /**
     * @param mixed $cour
     */
    public function setCour($cour)
    {
        $this->cour = $cour;
    }

    public function getIdserie()
    {
        return $this->idserie;
    }


    /**
     * @param mixed $idserie
     */
    public function setIdserie($idserie)
    {
        $this->idserie = $idserie;
    }

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
    public function getNomserie()
    {
        return $this->nomserie;
    }

    /**
     * @param mixed $nomserie
     */
    public function setNomserie($nomserie)
    {
        $this->nomserie = $nomserie;
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

    public function addPanier(panier $panier ): self
    {
        if (!$this->panieserie->contains($panier )) {
            $this->panieserie[] = $panier;
        }
        return $this;
    }
    public function removePanier(panier $panier ): self
    {
        if ($this->panieserie->contains($panier )) {
            $this->panieserie->removeElement($panier );
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPanieserie()
    {
        return $this->panieserie;
    }

    /**
     * @param mixed $panieserie
     */
    public function setPanieserie($panieserie)
    {
        $this->panieserie = $panieserie;
    }

    /**
     * @return mixed
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
     * @param mixed $reponses
     */
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;
    }


}