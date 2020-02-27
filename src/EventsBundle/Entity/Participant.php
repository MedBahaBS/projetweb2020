<?php


namespace EventsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity(repositoryClass="EventsBundle\Repository\ParticipantRepository")
 *
 */
class Participant
{
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumn(name="idevenement",
     *     referencedColumnName="idevenement",
     *     onDelete="CASCADE")
     */
    private $idevenement;

    /**
     *  @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="ideleve",
     *     referencedColumnName="id",
     *     onDelete="CASCADE")
     */
    private $ideleve;

    /**
     * @return mixed
     */
    public function getIdevenement()
    {
        return $this->idevenement;
    }

    /**
     * @param mixed $idevenement
     */
    public function setIdevenement($idevenement)
    {
        $this->idevenement = $idevenement;
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
    public function setIdeleve($ideleve)
    {
        $this->ideleve = $ideleve;
    }

}