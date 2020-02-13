<?php

namespace EventsBundle\Controller;

use EventsBundle\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EvenementFrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Events/Base_frontend/base.html.twig');
    }

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository(Evenement::class)->findAll();
        return $this->render('@Events/Evenement/show_events.html.twig',
            array('events' => $events));
    }
}
