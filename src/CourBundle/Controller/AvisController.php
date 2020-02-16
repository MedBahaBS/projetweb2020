<?php

namespace CourBundle\Controller;

use CourBundle\Entity\avis;
use CourBundle\Entity\cours;
use CourBundle\Form\avisType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AvisController  extends Controller
{
    public function indexAction()
    {
        return $this->render('@Cour/cour/layout.html.twig');
    }
    public function listAction()
    {
        $avis=$this->getDoctrine()
            ->getRepository(avis::class)->findAll();
        return $this->render('@Cour/avis/listavis.html.twig',array('avis'=>$avis));
    }
    public function ajoutAction(Request $request)
    {

        $avis = new avis();
        $form = $this->createForm(avisType::class, $avis);
        $form->handleRequest($request);//
        if ($form->isValid()) {
            $verif = $this->getDoctrine()->getRepository(avis::class)->findBy(array('avi' => $avis->getIdavis()));
            if (sizeof($verif) > 0) {
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'cours Existante'
                );

                $em = $this->getDoctrine()->getManager();
                $em->persist($avis);
                $em->flush();//executer
                return $this->redirectToRoute("avis_list");
            }
            return $this->render('@Cour/avis/ajoutavis.html.twig', array('form' => $form->createView()));
        }


    }}
