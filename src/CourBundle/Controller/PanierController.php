<?php

namespace CourBundle\Controller;

use CourBundle\Entity\avis;
use CourBundle\Entity\cours;
use CourBundle\Form\avisType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanierController  extends Controller
{
    public function indexAction()
    {
        $panier=$this->getUser()->getPanier();
        return $this->render('@Cour/panier/panier.html.twig',[
            'panier' =>$panier,
        ]);
    }
}
