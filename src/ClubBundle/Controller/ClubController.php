<?php

namespace ClubBundle\Controller;

use AppBundle\Entity\User;
use ClubBundle\Entity\Club;
use ClubBundle\Form\ClubType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClubController extends Controller
{
    public function AfficherclubAction()
    {
        $clubs=$this->getDoctrine()->getRepository(Club::class)->findAll();
        return $this->render('@Club/home/AfficherClub.html.twig',array('clubs'=>$clubs));
    }
    public function ajouterclubAction(Request $request)
    {
        $club= new club();
        $form = $this->createForm(ClubType::class,$club);
        $form=$form->handleRequest($request);

        if($form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            return $this->redirectToRoute('admin_AfficherClub');
        }
        return $this->render('@Club/home/ajouterclub.html.twig',array('form'=>$form->createView()));
    }
    public function ModifierclubAction(Request $request, $id)
    {
        $club=$this->getDoctrine()->getRepository(Club::class)->find($id);
        $form=$this->createForm(ClubType::class,$club);
        $form->handleRequest($request);
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            return $this->redirectToRoute("admin_AfficherClub");
        }
        return $this->render("@Club/home/ModifierClub.html.twig",array('form'=>$form->createView()));
    }
    public function SupprimerclubAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Club::class)->find($id); // search club
        $em->remove($club);
        $em->flush();//commit
        return $this->redirectToRoute('admin_AfficherClub');
    }
    public function afficherclubfrontAction()
    {
        $clubs=$this->getDoctrine()->getRepository(Club::class)->findAll();
        return $this->render('@Club/home/AfficherClubFront.html.twig',array('clubs'=>$clubs));
    }
    public function accueilAction()
    {
        return $this->render('@Club/home/Accueil.html.twig');
    }

}
