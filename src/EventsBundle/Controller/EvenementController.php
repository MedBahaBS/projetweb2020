<?php

namespace EventsBundle\Controller;

use DateInterval;
use EventsBundle\Entity\Evenement;
use EventsBundle\Entity\Participant;
use EventsBundle\Entity\User;
use EventsBundle\Form\EvenementType;
use EventsBundle\Form\RechercheEvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class EvenementController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Events/Evenement/base.html.twig');
    }
    public function accueilAction()
    {
        return $this->render('@Events/Evenement/accueil.html.twig');
    }

    public function listAction(Request $request)
    {   $event  = new Evenement();
        $form = $this->createForm(RechercheEvenementType::class,$event);
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository(Evenement::class)->findAll();

        if ($form->handleRequest($request)->isSubmitted())
            return $this->rechercheAction($request,$event);

        return $this->render('@Events/Evenement/liste_events.html.twig',
            array('events' => $events,
                   'f' => $form->createView(),
                    'uneRecherche' => false));
    }

    public function ajoutAction(Request $request)
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form = $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $evenement->setEtat(1);
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute("events_listeevent");
        }
        return $this->render('@Events/Evenement/ajout_evenement.html.twig',
            array('f' => $form->createView()));
    }

    public function modifierAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->find($id);
        $form = $this->createForm(EvenementType::class, $evenement);
        $form = $form->handleRequest($request);
        $etat = $evenement->getEtat();
        if ($form->isValid() && $form->isSubmitted()){
            $em->persist($evenement);
            $em->flush();
            if ($etat == 1)
                return $this->redirectToRoute("events_listeevent");
            else
                return $this->redirectToRoute("events_listeeventpending");
        }
        return $this->render('@Events/Evenement/modifier_evenement.html.twig',
            array('event'=>$evenement, 'f' => $form->createView() ));
    }

    public function supprimerAction($id){
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->find($id);
        $date = new \DateTime();
        $date->add(new DateInterval('P1D'));
        /*$participantsEmails = $em->getRepository(Participant::class)
            ->findParticipantsEmails($id);*/
        $participantsEmails = $em->getRepository(User::class)
            ->findParticipantsEmails($id);
        if ($evenement->getDate() > $date)
            {
                if (sizeof($participantsEmails)>0)
                    for($i=0;$i<sizeof($participantsEmails);$i++)
                    {
                        $message = (new \Swift_Message('Evénement annulé'))
                        ->setFrom('genuis.school.pidev@gmail.com')
                        ->setTo($participantsEmails[$i]->getEmail())
                        ->setBody($this->renderView(
                            '@Events/Emails/annuler_evenement.html.twig',
                            array('event' => $evenement)
                        ),
                            'text/html'
                        );

                         $result = $this->get('mailer')->send($message);
                    }
                $em->remove($evenement);
                $em->flush();
                return $this->redirectToRoute("events_listeevent");
            }
        return $this->redirectToRoute("events_listeevent");
    }

    public function detailsAction($idevent){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Evenement::class)->find($idevent);
        $participants = $em->getRepository(Participant::class)->findParticipantNameAndID($event->getIdevenement());
        return $this->render('@Events/Evenement/details_evenement.html.twig',
            array('event' => $event , 'participants' => $participants));
    }

    public function enAttenteAction(){
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository(Evenement::class)->findBy(array('etat' => 0));
        return $this->render('@Events/Evenement/liste_events_enAttente.html.twig',
            array('events' => $events));
    }

    public function confirmerAction($idevent){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Evenement::class)->find($idevent);
        $event->setEtat(1);
        $em->persist($event);
        $em->flush();
        return $this->redirectToRoute("events_listeevent");
    }

    public function supprimerParticipantAction($idevent,$idparticipant){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Evenement::class)->find($idevent);
        $participant = $em->getRepository(Participant::class)->findBy(array('ideleve' => $idparticipant,
                                                                                    'idevenement' => $idevent));
        $participantEmail = $em->getRepository(User::class)
                ->findParticipant($idparticipant,$idevent);
        $p = $participant[sizeof($participant)-1];
        $em->remove($p);
        $em->flush();

        $message = (new \Swift_Message('Annulation de participation'))
            ->setFrom('genuis.school.pidev@gmail.com')
            ->setTo($participantEmail[sizeof($participantEmail)-1]->getEmail())
            ->setBody($this->renderView(
                '@Events/Emails/supprimer_participation.html.twig',
                array('event' => $event)
            ),
                'text/html'
            );

        $result = $this->get('mailer')->send($message);
        return $this->redirectToRoute("events_detailsevent", array('idevent' => $idevent));
    }


    /**
     *
     * @param Request $request
     *
     * @return Response
     * @throws \Exception
     */

    public function loadAction(Request $request)
    {
        $startDate = new \DateTime($request->get('date'));
        $endDate = new \DateTime($request->get('datefin'));
        //$filters = $request->get('filters', []);

        try {
            $content = $this
                ->get('anca_rebeca_full_calendar.service.calendar')
                ->getData($startDate, $endDate);
            $status = empty($content) ? Response::HTTP_NO_CONTENT : Response::HTTP_OK;
        } catch (\Exception $exception) {
            $content = json_encode(array('error' => $exception->getMessage()));
            $status = Response::HTTP_INTERNAL_SERVER_ERROR;
        }

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($content);
        $response->setStatusCode($status);

        return $this->render('@Events/Evenement/accueil.html.twig');
        //return $response;
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
            $events = $this->getDoctrine()->getManager()->getRepository(Evenement::class)->findAll();
        else
            $events = $eventsTitre + $eventsDate + $eventsLieu + $eventsCategorie+ $eventsClub;

        return $this->render('@Events/Evenement/liste_events.html.twig',
            array('events'=>$events ,
                'f' => $form->createView() ,
                'nb' => sizeof($events),
                'uneRecherche' => true
            ));
    }
}
