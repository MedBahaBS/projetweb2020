<?php

namespace GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestionBundle\Form\ClasseType;
use GestionBundle\Entity\Classe;
use Symfony\Component\HttpFoundation\Request;

class ClasseController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionBundle:Default:index.html.twig');
    }
    public function afficheCAction()
    {
        $em = $this->getDoctrine()->getManager(); // instancier un objet em pour pouvoir acceder les fonctionnalites sous repositry
        $classe = $em->getRepository("GestionBundle:Classe")->findAll(); //puis dans ce niveau on appelle getRepository
        return $this->render('@Gestion/Classe/afficheC.html.twig', array('c' => $classe));
    }


    public function afficheCfrontAction()
    {
        $em = $this->getDoctrine()->getManager(); // instancier un objet em pour pouvoir acceder les fonctionnalites sous repositry
        $classe = $em->getRepository("GestionBundle:Classe")->findAll(); //puis dans ce niveau on appelle getRepository
        return $this->render('@Gestion/Classe/afficheCfront.html.twig', array('c' => $classe));
    }

    public function ajouterCAction(Request $request)
    {
        $c=new Classe();
        $Form=$this->createForm(ClasseType::class,$c);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();
            return $this->redirectToRoute('gestion_afficheC');
        }
        return $this->render('@Gestion/Classe/ajouterC.html.twig',array('form'=>$Form->createView()));
    }

    public function modifierCAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $classes = $em->getRepository(Classe::class)->find($id);
        if ($request->isMethod('post')) {
            $classes->setlibelle($request->get('libelle'));
            $classes->setnombreeleve($request->get('Nombreeleve'));
            $classes->setnumsalle($request->get('Numsalle'));
            $em->flush();
            return $this->redirectToRoute("gestion_afficheC");
        }
        return $this->render('@Gestion/Classe/modifierC.html.twig', array('classe' => $classes));
    }

    public function deleteCAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $classes=$em->getRepository("GestionBundle:Classe")->find($id);
        $em->remove($classes);
        $em->flush();
        return $this->redirectToRoute('gestion_afficheC');
    }
}
