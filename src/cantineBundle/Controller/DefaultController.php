<?php

namespace cantineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if ($this->isGranted("ROLE_ADMIN")){
            return $this->redirectToRoute('ajouterplat');
        }

        if ($this->isGranted("ROLE_USER")){
            return $this->redirectToRoute('afficher_menu');
        }

        return $this->redirectToRoute('fos_user_security_login');
    }

}
