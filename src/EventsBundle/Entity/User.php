<?php


namespace EventsBundle\Entity;
use FOS\UserBundle\Model\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends FOSUser
{   /**
 * @ORM\Column(type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}