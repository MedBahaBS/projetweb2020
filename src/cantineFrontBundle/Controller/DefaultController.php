<?php

namespace cantineFrontBundle\Controller;

use EventsBundle\Entity\Evenement;
use EventsBundle\Form\RechercheEvenementType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {   $actu = array();
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository(Evenement::class)->findAll();
        for ($i=0;$i<sizeof($events);$i++)
            if ($events[$i]->getCategorie()->getLibelle() == "Actualités" && $events[$i]->getDate() >= new \DateTime())
                $actu[sizeof($actu)] = $events[$i];
        $liste = $this->get('knp_paginator')->paginate(
            $actu, /* query NOT result */
            $request->query->get('page', 1), /*page number*/
            9 /*limit per page*/
        );
        return $this->render('@cantineFront/Default/indexfront.html.twig',
            array('events' => $liste));
    }
}
