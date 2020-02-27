<?php


namespace EventsBundle\Entity;
use AncaRebeca\FullCalendarBundle\Event\CalendarEvent;
use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use AncaRebeca\FullCalendarBundle\Service\Calendar;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/** @ORM\Entity(repositoryClass="EventsBundle\Repository\EvenementRepository")
 *  @Vich\Uploadable
 */

class Evenement
{
    /**
 * @ORM\Column(type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $idevenement;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le champs titre ne doit pas être vide")
     */
    private $titre;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le champs description ne doit pas être vide")
     */
    private $description;
    /**
     * @ORM\Column(type="date")
     * @Assert\GreaterThan("today",message="La date de l'événement doit être supérieur à la date d'aujourd'hui ")
     */
    private $date;
    /**
     * @ORM\Column(type="integer")
     * @Assert\GreaterThan(-1)
     */
    private $etat;
    /**
     * @ORM\Column(type="integer")
     * @Assert\GreaterThan(value=0,message="Le nombre de participants maximal doit être supérieur à 0")
     */
    private $nbParticipantMax;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le champs lieu ne doit pas être vide")
     */
    private $lieu;
    /**
     * @ORM\Column(type="integer")
     * @Assert\GreaterThan(value=-1,message="Les frais de l'événément doivent être supérieur ou égal à 0")
     */
    private $frais;
    /**
     * @ORM\Column(type="date")
     * @Assert\GreaterThan(propertyPath="date",message="La date de fin de l'événement doit être supérieure à la date de début")
     */
    private $datefin;
    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(name="categorie",
     *     referencedColumnName="idcategorie",
     *     onDelete="CASCADE")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="ClubBundle\Entity\Club")
     * @ORM\JoinColumn(name="club",
     *     referencedColumnName="id",
     *     nullable=true,
     *     onDelete="CASCADE")
     */
    private $club;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="evenements", fileNameProperty="imageName")
     *
     * @var File|null
     * @Assert\Image
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string",nullable=true)
     *
     * @var string|null
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     *
     * @var \DateTimeInterface|null
     */
    private $updatedAt;

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->datefin = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
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
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getNbParticipantMax()
    {
        return $this->nbParticipantMax;
    }

    /**
     * @param mixed $nbParticipantMax
     */
    public function setNbParticipantMax($nbParticipantMax)
    {
        $this->nbParticipantMax = $nbParticipantMax;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param mixed $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getFrais()
    {
        return $this->frais;
    }

    /**
     * @param mixed $frais
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;
    }

    /**
     * @return mixed
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * @param mixed $datefin
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param mixed $club
     */
    public function setClub($club): void
    {
        $this->club = $club;
    }


    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

}