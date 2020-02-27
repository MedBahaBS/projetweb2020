<?php

namespace EventsBundle\Controller;

use \FOS\UserBundle\Controller\SecurityController;

class LoginController extends SecurityController
{
    public function indexAction()
    {
        if ($this->isGranted("ROLE_ADMIN")){
            return $this->redirectToRoute('events_accueil');
        }
        else if ($this->isGranted("ROLE_CLUB")){
            return $this->redirectToRoute('events_proposerevent');
        }
        else if ($this->isGranted("ROLE_USER")){
            return $this->redirectToRoute('cantine_front_homepage');
        }

        return $this->redirectToRoute('fos_user_security_login');
    }
}
