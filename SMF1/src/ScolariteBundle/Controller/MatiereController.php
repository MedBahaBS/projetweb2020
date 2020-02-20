<?php

namespace ScolariteBundle\Controller;

use ScolariteBundle\Form\MatiereType;
use ScolariteBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MatiereController extends Controller
{
    public function indexAction()
    {
        return $this->render('ScolariteBundle:Default:index.html.twig');
    }
    public function readmAction()
    {
        $matieres=$this->getDoctrine()->getRepository(Matiere::class)->findAll();
        return $this->render('@Scolarite/Matiere/readm.html.twig',array('matieres'=>$matieres));
    }
    public function ajoutmAction(Request $request)
    {
        $matieres= new Matiere();
        $form = $this->createForm(MatiereType::class,$matieres);
        $form=$form->handleRequest($request);

        if($form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            $em->persist($matieres);
            $em->flush();
            return $this->redirectToRoute('scolarite_readm');
        }
        return $this->render('@Scolarite/Matiere/ajoutm.html.twig',array('form'=>$form->createView()));
    }
    public function deleteAction($idmatiere){
        $em=$this->getDoctrine()->getManager();
        $matiere=$em->getRepository(Matiere::class)->find($idmatiere); //récupération de club a supprimer
        $em->remove($matiere);
        $em->flush(); //l'operation supprimer
        return $this->redirectToRoute("scolarite_readm");
    }
    public function modifierAction(Request $request, $idmatiere)
    {
        $em = $this->getDoctrine()->getManager();
        $matiere = $em->getRepository(Matiere::class)->find($idmatiere); //récupération
        if ($request->isMethod('post')) {
            $matiere->setnom($request->get('nom'));
            $matiere->setnbrseance($request->get('nbrseance'));
            // $question->setnbrVue($request->get('nbrVue'));
            $matiere->setdescription($request->get('description'));
            $matiere->setcoefficient($request->get('coefficient'));
            $em->flush(); //l'operation modifié
            return $this->redirectToRoute("scolarite_readm");
        }
        return $this->render('@Scolarite/Matiere/modifier.html.twig', array('matiere' => $matiere));
    }

}
