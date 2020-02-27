<?php

namespace cantineBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * plat
 *
 * @ORM\Table(name="plat")
 * @ORM\Entity(repositoryClass="cantineBundle\Repository\platRepository")
 */
class plat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern     = "/^[a-zA-Z ]+$/",
     *     match=true,
     *     message="Veuillez un choisir un nom valide.")
     * @ORM\Column(name="nomPlat", type="string", length=255)

     */
    private $nomPlat;
    /**
     * @var string
     * @Assert\Regex(
     *     pattern     = "/^[a-zA-Z ]+$/",
     *     match=true,
     *     message="Veuillez un choisir un nom valide.")
     * @ORM\Column(name="status", type="string", length=255)

     */
    private $status="non reserve";

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @var string
     * @ORM\Column(name="image", type="string", length=255)
     * @Assert\File(mimeTypes={"image/jpeg","image/jpg/"})
     */
    private $image;

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPlat
     *
     * @param string $nomPlat
     *
     * @return plat
     */
    public function setNomPlat($nomPlat)
    {
        $this->nomPlat = $nomPlat;

        return $this;
    }

    /**
     * Get nomPlat
     *
     * @return string
     */
    public function getNomPlat()
    {
        return $this->nomPlat;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return plat
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }



}

