<?php

namespace CourBundle\Controller;

use CourBundle\Entity\serie;
use CourBundle\Form\serieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SerieController extends Controller
{

    public function listAction()
    {
        $se=$this->getDoctrine()
            ->getRepository(serie::class)->findAll();
        return $this->render('@Cour/serie/listserie.html.twig',array('se'=>$se));
    }
    public function ajoutAction(Request $request)
    {
        $se = new serie();
        $form = $this->createForm(serieType::class, $se);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($se);
            $em->flush();
            return $this->redirectToRoute("serie_list");
        }
        return $this->render('@Cour/serie/ajoutserie.html.twig',array('form'=>$form->createView()));
    }
    public function modifierAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $serie=$em->getRepository(serie::class)->find($id);
        if($request->isMethod('POST'))
        {
            $serie->setLien($request->get('lien'));
            $serie->setNomserie($request->get('nomserie'));
            $serie->setDescription($request->get('description'));


            $em->flush();
            return $this->redirectToRoute("serie_list");
        }
        return $this->render('@Cour/serie/modifierserie.html.twig',array('serie'=>$serie));
    }
    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $serie= $em->getRepository(serie::class)->find($id);//recuperation de avis a supp
        $em->remove($serie);
        $em->flush();//supp
        return $this->redirectToRoute("serie_list");
    }
    public function listafficheAction()
    {
        $se=$this->getDoctrine()
            ->getRepository(serie::class)->findAll();
        return $this->render('@Cour/seriefront/listseriefront.html.twig',array('se'=>$se));
    }
}
