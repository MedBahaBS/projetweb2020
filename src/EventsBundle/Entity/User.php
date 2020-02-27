<?php


namespace EventsBundle\Entity;
use FOS\UserBundle\Model\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity(repositoryClass="EventsBundle\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends FOSUser
{   /**
 * @ORM\Column(type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    protected $id;

    /**
     * One panier has One eleve
     * @ORM\OneToOne(targetEntity="CourBundle\Entity\Panier", mappedBy="eleve")
     *
     */
    private $panier;

    /**
     *@ORM\Column(name="score",type="integer", nullable=true)
     */
    private $score = 0;

/**
* Many series have Many panier.
* @ORM\ManyToMany(targetEntity="CourBundle\Entity\cours", inversedBy="likes")
* * @ORM\JoinTable(name="likes",
*      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
*      inverseJoinColumns={@ORM\JoinColumn(name="cours_id", referencedColumnName="idcour")}
     *      )
     */
    private $coursLikes;


    public function addCours(\CourBundle\Entity\cours $cours ): self
    {
        if (!$this->coursLikes->contains($cours )) {
            $this->coursLikes[] = $cours;
        }
        return $this;
    }
    public function removeCours(\CourBundle\Entity\cours $cours ): self
    {
        if ($this->coursLikes->contains($cours )) {
            $this->coursLikes->removeElement($cours );
        }
        return $this;
    }
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * @param mixed $panier
     */
    public function setPanier($panier): void
    {
        $this->panier = $panier;
    }

    /**
     * @return String
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param String $score
     * @return User
     */
    public function setScore(int $score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getCoursLikes()
    {
        return $this->coursLikes;
    }

    /**
     * @param mixed $coursLikes
     */
    public function setCoursLikes($coursLikes): void
    {
        $this->coursLikes = $coursLikes;
    }


}