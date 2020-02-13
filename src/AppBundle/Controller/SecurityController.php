<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Security:user_home.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/home")
     */
    public function redirectAction()
    {
        $authchecker = $this->container->get('security.authorization_checker');
        if($authchecker->isGranted('ROLE_ADMIN'))
        {
            return $this->render('@App/Security/admin_home.html.twig');
        }else if($authchecker->isGranted('ROLE_USER'))
        {
            return $this->render('@App/Security/user_home.html.twig');
        }
        else{
            return $this->render('@FOSUser/Security/admin_home.html.twig');
        }


    }

}
