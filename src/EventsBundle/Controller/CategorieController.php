<?php

namespace EventsBundle\Controller;

use EventsBundle\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EventsBundle\Entity\Categorie;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Events/Base_backend/base.html.twig');
    }
    public function accueilAction()
    {
        return $this->render('@Events/Evenement/accueil.html.twig');
    }

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Categorie::class)->findAll();
        return $this->render('@Events/Categorie/liste_categorie.html.twig',
            array('categories' => $categories));
    }

    public function ajoutAction(Request $request)
    {
        $categorie = new Categorie();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form = $form->handleRequest($request);
        $categories = $em->getRepository(Categorie::class)->findAll();
        if ($form->isValid()){
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("events_listecategorie");
        }
        return $this->render('@Events/Categorie/ajout_categorie.html.twig',
            array('f' => $form->createView()));
    }

    public function modifierAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Categorie::class)->find($id);
        $form = $this->createForm(CategorieType::class, $categorie);
        $form = $form->handleRequest($request);
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("events_listecategorie");
        }
        /*
        $categorie = $em->getRepository(Categorie::class)->find($id);
        if ($request->isMethod('POST')){
            $categorie->setLibelle($request->get('libelle'));
            $categorie->setDescription($request->get('description'));
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("events_listecategorie");
        }
        */
        return $this->render('@Events/Categorie/modifier_categorie.html.twig',
            array('categorie'=>$categorie, 'f'=> $form->createView()));
    }

    public function supprimerAction($id){
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Categorie::class)->find($id);
            $em->remove($categorie);
            $em->flush();
            return $this->redirectToRoute("events_listecategorie");

    }
}
