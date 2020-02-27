<?php

namespace ClubBundle\Controller;

use ClubBundle\Entity\Membre;
use EventsBundle\Entity\User;
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
    public function afficherclubfrontAction(Request $request)
    {
        $clubs=$this->getDoctrine()->getRepository(Club::class)->findAll();
        $liste = $this->get('knp_paginator')->paginate(
            $clubs, /* query NOT result */
            $request->query->get('page', 1), /*page number*/
            5 /*limit per page*/
        );

        return $this->render('@Club/home/AfficherClubFront.html.twig',array('clubs'=>$liste));
    }
    public function accueilAction()
    {
        return $this->render('@Club/home/Accueil.html.twig');
    }
    public function detailAction($id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Club::class)->find($id);

        $estMembre = $em->getRepository(Membre::class)
            ->findBy(array('id'=> $id, 'ideleve' => $user->getId()));
        return $this->render('@Club/home/details_club.html.twig',
            array('club' => $club ,'estMembre' => $estMembre!=null));
    }
    public function ajoutermembreAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Club::class)->find($id);
        $user = $this->getUser();

        $membre= new Membre();
        $membre->setIdeleve($user->getId());
        $membre->setId($id);
        $em->persist($membre);
        $em->flush();
        return $this->render('@Club/home/details_club.html.twig',
            array('club' => $club, 'estMembre' => true));
    }

}
