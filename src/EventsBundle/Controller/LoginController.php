<?php

namespace EventsBundle\Controller;

use EventsBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \FOS\UserBundle\Controller\SecurityController;

class LoginController extends SecurityController
{
    public function indexAction()
    {
        if ($this->isGranted("ROLE_ADMIN")){
            return $this->redirectToRoute('events_accueil');
        }
        else if ($this->isGranted("ROLE_USER")){
            return $this->redirectToRoute('events_frontshow');
        }

        return $this->redirectToRoute('fos_user_security_login');
    }
}
