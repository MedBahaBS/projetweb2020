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

}