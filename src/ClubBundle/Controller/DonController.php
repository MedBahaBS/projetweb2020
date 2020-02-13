<?php

namespace ClubBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\User;
use ClubBundle\Entity\Don;
use ClubBundle\Form\DonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DonController extends Controller
{
    public function AfficherdonAction()
    {
        $dons=$this->getDoctrine()->getRepository(Don::class)->findAll();
        return $this->render('@Club/home/AfficherDon.html.twig',array('dons'=>$dons));
    }
    public function AjouterdonAction(Request $request)
    {
        $don= new don();
        $form = $this->createForm(DonType::class,$don);
        $form=$form->handleRequest($request);

        if($form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();
            return $this->redirectToRoute('admin_AfficherDon');
        }
        return $this->render('@Club/home/AjouterDon.html.twig',array('form'=>$form->createView()));
    }
    public function ModifierdonAction(Request $request, $id)
    {
        $don=$this->getDoctrine()->getRepository(Don::class)->find($id);
        $form=$this->createForm(DonType::class,$don);
        $form->handleRequest($request);
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();
            return $this->redirectToRoute("admin_AfficherDon");
        }
        return $this->render("@Club/home/ModifierDon.html.twig",array('form'=>$form->createView()));
    }
    public function SupprimerdonAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository(Don::class)->find($id); // search club
        $em->remove($don);
        $em->flush();//commit
        return $this->redirectToRoute('admin_AfficherDon');
    }
}
