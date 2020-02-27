<?php


namespace GestionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 */

class Archive
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Reclamation", inversedBy="archive")
     */
private $Reclamation;

    /**
     * Get id
     *  @return int
     */
    public function getReclamation()
    {
        return $this->Reclamation;
    }

    /**
     * @param mixed $Reclamation
     */
    public function setReclamation($Reclamation)
    {
        $this->Reclamation = $Reclamation;
    }





    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}