<?php

namespace CourBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted("ROLE_ADMIN"))
        {return $this->render('base.html.twig');}

        if($this->get('security.authorization_checker')->isGranted("ROLE_USER"))
        {return $this->render('@Cour/courfront/basefront.html.twig');}


    }
}


