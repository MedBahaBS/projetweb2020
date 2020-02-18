<?php

namespace ClubBundle\Controller;


use ClubBundle\Entity\Club;
use FOS\UserBundle\Form\Type\ProfileFormType;
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
        {
            $user = $this->getUser();
            return $this->render('espaceetudiant.html.twig', array(
            'user' => $user,
            ));
        }
        else if($this->isGranted('ROLE_PARENT'))
        {
            $user = $this->getUser();
            return $this->render('espaceparent.html.twig', array(
                'user' => $user,
            ));

        }
        else {return $this->redirectToRoute('accueil');}
    }
}
