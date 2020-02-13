<?php

namespace EventsBundle\Controller;

use EventsBundle\Entity\Evenement;
use EventsBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository(Evenement::class)->findAll();
        return $this->render('@Events/Evenement/liste_events.html.twig',
            array('events' => $events));
    }

    public function ajoutAction(Request $request)
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form = $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $evenement->setEtat(1);
            $em->persist($evenement);
            $em->flush();
            /*
            if ($img = $request->get('images')!= null){
                $response = $factory->create($folder.'/'.$path, $mimeType);

            }*/
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
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute("events_listeevent");
        }
        return $this->render('@Events/Evenement/modifier_evenement.html.twig',
            array('event'=>$evenement, 'f' => $form->createView() ));
    }

    public function supprimerAction($id){
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->find($id);
            $em->remove($evenement);
            $em->flush();
            return $this->redirectToRoute("events_listeevent");
    }

    public function detailsAction($id){
        return $this->render('@Events/Evenement/details_evenement.html.twig');
    }
}
