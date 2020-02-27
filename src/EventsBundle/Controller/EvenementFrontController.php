<?php

namespace EventsBundle\Controller;

use EventsBundle\Entity\Evenement;
use EventsBundle\Entity\Participant;
use EventsBundle\Form\EvenementType;
use EventsBundle\Form\RechercheEvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementFrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Events/Base_frontend/base.html.twig');
    }

    public function listAction(Request $request)
    {   $event  = new Evenement();
        $form = $this->createForm(RechercheEvenementType::class,$event);
        $em = $this->getDoctrine()->getManager();
        //$dateAuj = new \DateTime();
        $events = $em->getRepository(Evenement::class)->myfindEvenement();

        $liste = $this->get('knp_paginator')->paginate(
            $events, /* query NOT result */
            $request->query->get('page', 1), /*page number*/
            9 /*limit per page*/
        );

            if ($form->handleRequest($request)->isSubmitted())
                return $this->rechercheAction($request,$event);

        return $this->render('@Events/Evenement_Front/show_events.html.twig',
            array('events' => $liste,
                   'f' => $form->createView(),
                    'uneRecherche' => false,
                    'archive' => false));
    }

    public function archiveAction(Request $request)
    {   $event  = new Evenement();
        $form = $this->createForm(RechercheEvenementType::class,$event);
        $em = $this->getDoctrine()->getManager();
        //$dateAuj = new \DateTime();
        $events = $em->getRepository(Evenement::class)->myfindEvenementPasse();

        $liste = $this->get('knp_paginator')->paginate(
            $events, /* query NOT result */
            $request->query->get('page', 1), /*page number*/
            9 /*limit per page*/
        );

        if ($form->handleRequest($request)->isSubmitted())
            return $this->rechercheAction($request,$event);

        return $this->render('@Events/Evenement_Front/show_events.html.twig',
            array('events' => $liste,
                'f' => $form->createView(),
                'uneRecherche' => false,
                'archive' => true));
    }

    public function detailsAction($idevent){
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Evenement::class)->find($idevent);
        if ($user != null )
            {
                $estParticipant = $em->getRepository(Participant::class)
                    ->findBy(array('idevenement'=> $idevent, 'ideleve' => $user->getId()));
                return $this->render('@Events/Evenement_Front/details_evenement.html.twig',
                    array('event' => $event , 'userConnected' => true ,'estParticipant' => $estParticipant!=null));
            }
        else
            return $this->render('@Events/Evenement_Front/details_evenement.html.twig',
                array('event' => $event , 'userConnected' => false  , 'estParticipant' => 'null'));
    }

    public function participerAction($idevent)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Evenement::class)->find($idevent);
        $nbparticipant = $em->getRepository(Participant::class)->findParticipantsNumber($idevent);
        if ($event->getNbParticipantMax() > sizeof($nbparticipant) && $event->getDate() > Date('d/m/Y H:i:s \O\n ')) {
            $user = $this->getUser();
            $participant = new Participant();
            $participant->setIdeleve($user->getId());
            $participant->setIdevenement($idevent);
            $em->persist($participant);
            $em->flush();

            $message = (new \Swift_Message('Confirmation de participation'))
                ->setFrom('genuis.school.pidev@gmail.com')
                ->setTo($user->getEmail())
                ->setBody($this->renderView(
                    '@Events/Emails/Confirmer_participation.html.twig',
                            array('event' => $event)
                ),
                    'text/html'
                );

            $result = $this->get('mailer')->send($message);

            return $this->render('@Events/Evenement_Front/details_evenement.html.twig',
                array('event' => $event, 'estParticipant' => true, 'userConnected' => true));
        }
    }

    public function rechercheAction(Request $request,Evenement $evenement){
        $form = $this->createForm(RechercheEvenementType::class);
        $form = $form->handleRequest($request);
        $eventsTitre = array();
        $eventsDate = array();
        $eventsLieu = array();
        $eventsCategorie = array();
        $eventsClub = array();

            if ($evenement->getTitre() != '')
                $eventsTitre = $this->getDoctrine()
                    ->getRepository(Evenement::class)
                    ->myfindByTitre($evenement->getTitre());

            if ($evenement->getDate() != '')
                $eventsDate = $this->getDoctrine()
                    ->getRepository(Evenement::class)
                    ->myfindByDate($evenement->getDate());

            if ($evenement->getLieu() != '')
                $eventsLieu = $this->getDoctrine()
                    ->getRepository(Evenement::class)
                    ->myfindByLieu($evenement->getLieu());

            if ($evenement->getCategorie() != '')
                $eventsCategorie = $this->getDoctrine()
                    ->getRepository(Evenement::class)
                    ->findByCategorie($evenement->getCategorie());

        if ($evenement->getClub() != '')
            $eventsClub = $this->getDoctrine()
                ->getRepository(Evenement::class)
                ->findByClub($evenement->getClub());

        if (sizeof($eventsTitre) == 0
                && sizeof($eventsDate) == 0
                    && sizeof($eventsLieu) == 0
                        && sizeof($eventsCategorie) == 0
                            && sizeof($eventsCategorie) == 0
                                && sizeof($eventsClub) == 0)
            $events = $this->getDoctrine()->getManager()->getRepository(Evenement::class)->myfindEvenement();
        else
            $events = $eventsTitre + $eventsDate + $eventsLieu + $eventsCategorie + $eventsClub;

            $liste = $this->get('knp_paginator')->paginate(
                $events, /* query NOT result */
                $request->query->get('page', 1), /*page number*/
                9 /*limit per page*/
            );
                return $this->render('@Events/Evenement_Front/show_events.html.twig',
                    array('events'=>$liste ,
                        'f' => $form->createView() ,
                        'uneRecherche' => true ,
                        'nb' => sizeof($events),
                        'archive' => false));
        }

    public function proposerAction(Request $request){
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form = $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $evenement->setEtat(0);
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute("events_frontshow");
        }
        return $this->render('@Events/Evenement_Front/ajout_evenement.html.twig',
            array('f' => $form->createView()));
    }
}
