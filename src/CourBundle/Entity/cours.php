<?php


namespace CourBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\ManyToOne(targetEntity="ScolariteBundle\Entity\Matiere", inversedBy="matiere")
     * @ORM\JoinColumn(name="matiere",referencedColumnName="idmatiere")
     */
    private $matiere;
    /**
     * @return mixed
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }

    /**
     * @param mixed $qrcode
     */
    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;
    }
    /**
     * @ORM\Column(type="text")
     */

    private $qrcode;

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
     *
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $lien;
    /**

     * @ORM\ManyToMany(targetEntity="EventsBundle\Entity\User", mappedBy="coursLikes")
     */
    private $likes;

    public function addLikes(\EventsBundle\Entity\User $user): self
    {
        if (!$this->likes->contains($user)) {
            $this->likes[] = $user;
        }
        return $this;
    }
    public function removeLikes(\EventsBundle\Entity\User $user): self
    {
        if ($this->likes->contains($user)) {
            $this->likes->removeElement($user);
        }
        return $this;
    }

    public function getLien()
    {
        return $this->lien;
    }

    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }


    /**
     * @ORM\OneToMany(targetEntity="serie", mappedBy="cour")
     */
    private $series;

    public function __construct()
    {
        $this->series = new ArrayCollection();
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
     * @return Collection|serie[]
     */
    public function getSeries(): Collection
    {
        return $this->series;
    }

    public function addSeries(Serie $user): self
    {
        if (!$this->Series->contains($user)) {
            $this->Series[] = $user;
        }
        return $this;
    }
    public function removeSeries(Serie $user): self
    {
        if ($this->series->contains($user)) {
            $this->series->removeElement($user);
            $user->setCour(null);
        }
        return $this;
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

    /**
     * @return mixed
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param mixed $likes
     */
    public function setLikes($likes): void
    {
        $this->likes = $likes;
    }


}