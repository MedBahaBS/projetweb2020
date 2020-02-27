<?php


namespace ClubBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
 *
 */
class Membre
{
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumn(name="id",
     *     referencedColumnName="id",
     *     onDelete="CASCADE")
     */
    private $id;

    /**
     *  @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="EventsBundle\Entity\User")
     * @ORM\JoinColumn(name="ideleve",
     *     referencedColumnName="id",
     *     onDelete="CASCADE")
     */
    private $ideleve;

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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdeleve()
    {
        return $this->ideleve;
    }

    /**
     * @param mixed $ideleve
     */
    public function setIdeleve($ideleve): void
    {
        $this->ideleve = $ideleve;
    }



}