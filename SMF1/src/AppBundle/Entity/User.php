<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *@ORM\Column(name="score",type="integer", nullable=true)
     */
    private $score = 0;





    /**
     *@ORM\Column(name="nom",type="string", length=255,nullable=false)
     */
    private $nom;

    /**
     *@ORM\Column(name="pays",type="string", length=255,nullable=true)
     */
    private $pays;

    /**
     *@ORM\Column(name="ville",type="string", length=255,nullable=true)
     */
    private $ville;

    /**
     *@ORM\Column(name="adresse",type="string", length=255,nullable=false)
     */
    private $adresse;

    /**
     *@ORM\Column(name="tel",type="string", length=8,nullable=false)
     */
    private $tel;

    /**
     *@ORM\Column(name="nivexper",type="string", length=255,nullable=true)
     */
    private $nivexper;

    /**
     *@ORM\Column(name="nivetud",type="string", length=255,nullable=true)
     */
    private $nivetud;

    /**
     *@ORM\Column(name="sexe",type="string", length=255,nullable=true)
     */
    private $sexe;


    /**
     * @var string
     *
     * @ORM\Column(name="urlLogoPro", type="string", length=254, nullable=true)
     */
    private $urllogopro;

    /**
     * @return mixed
     */
    public function getNivetud()
    {
        return $this->nivetud;
    }

    /**
     * @param mixed $nivetud
     */
    public function setNivetud($nivetud)
    {
        $this->nivetud = $nivetud;
    }



    /**
     * Set urllogopro
     *
     * @param string $urllogopro
     *
     * @return User
     */
    public function setUrllogopro($urllogopro)
    {
        $this->urllogopro = $urllogopro;

        return $this;
    }

    /**
     * Get urllogopro
     *
     * @return string
     */
    public function getUrllogopro()
    {
        return $this->urllogopro;
    }


    /**
     *@ORM\Column(name="titre",type="string", length=255,nullable=true)
     */
    private $titre;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getNivexper()
    {
        return $this->nivexper;
    }

    /**
     * @param mixed $nivexper
     */
    public function setNivexper($nivexper)
    {
        $this->nivexper = $nivexper;
    }



    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
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
     * Set score
     *
     * @param string $score
     *
     * @return User
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }


    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return User
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }



}
