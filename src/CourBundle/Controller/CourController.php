<?php

namespace CourBundle\Controller;

use CourBundle\Entity\cours;
use CourBundle\Form\coursType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CourController  extends Controller
{


    public function listAction()
    {
        $cours=$this->getDoctrine()
            ->getRepository(cours::class)->findAll();
        return $this->render('@Cour/cour/listcour.html.twig',array('cours'=>$cours));
    }
    public function ajoutAction(Request $request)
    {
        $cour = new cours();
        $form = $this->createForm(coursType::class, $cour);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $time = new \DateTime();
            $cour->setDate($time);
            $e = $this->getDoctrine()->getManager();
            $e->persist($cour);
            $e->flush();
            return $this->redirectToRoute("cour_list");
        }
        return $this->render('@Cour/cour/ajoutcour.html.twig',array('form'=>$form->createView()));
    }
    public function modifierAction(Request $request,$id)

    {
        $em = $this->getDoctrine()->getManager();
        $cour = $em->getRepository(cours::class)->find($id); //récupération


        if ($request->isMethod('post')) {
            $cour->setNiveau($request->get('niveau'));
            $cour->setMatiere($request->get('matiere'));
            // $question->setnbrVue($request->get('nbrVue'));
            $cour->setNomchapitre($request->get('nomchapitre'));
          //  $cour->setDate(date($request->get('date')));
            $cour->setEmail($request->get('email'));
            $cour->setLien($request->get('lien'));
            $cour->setSeries($request->get('series'));
            $e = $this->getDoctrine()->getManager();
            $e->persist($cour);
            $e->flush();
            return $this->redirectToRoute("cour_list");
        }

        return $this->render('@Cour/cour/modifiercour.html.twig',array('cour'=>$cour));
    }
    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cour= $em->getRepository(cours::class)->find($id);//recuperation de avis a supp
        $em->remove($cour);
        $em->flush();//supp
        return $this->redirectToRoute("cour_list");
    }
    public function affichefrontAction()
    {
        $cours=$this->getDoctrine()
            ->getRepository(cours::class)->findAll();
        return $this->render('@Cour/courfront/listcourfront.html.twig',array('cours'=>$cours));
    }

}
