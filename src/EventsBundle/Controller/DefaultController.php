<?php

namespace EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if ($this->isGranted("ROLE_ADMIN")){
            return $this->render('@Events/Evenement/accueil.html.twig');
        }
        else if ($this->isGranted("ROLE_USER")){
            return $this->render('@Events/Evenement/show_events.html.twig');
        }

        return $this->redirectToRoute('fos_user_security_login');
    }
}
