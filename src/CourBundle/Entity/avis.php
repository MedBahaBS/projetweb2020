<?php


namespace CourBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */

class avis
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idavis;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avisparent;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $rating;

    /**
     * @return mixed
     */
    public function getIdavis()
    {
        return $this->idavis;
    }

    /**
     * @param mixed $idavis
     */
    public function setIdavis($idavis)
    {
        $this->idavis = $idavis;
    }

    /**
     * @return mixed
     */
    public function getAvisparent()
    {
        return $this->avisparent;
    }

    /**
     * @param mixed $avisparent
     */
    public function setAvisparent($avisparent)
    {
        $this->avisparent = $avisparent;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

}