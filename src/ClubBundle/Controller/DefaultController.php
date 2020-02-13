<?php

namespace ClubBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if($this->isGranted('ROLE_ADMIN'))
        { return $this->render('base2.html.twig'); }
        else if($this->isGranted('ROLE_ETUDIANT'))
        {return $this->render('base.html.twig');}
        else {return $this->redirectToRoute('fos_user_security_login');}
    }
}
