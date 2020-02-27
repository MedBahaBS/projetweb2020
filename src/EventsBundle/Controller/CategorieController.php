<?php

namespace EventsBundle\Controller;

use EventsBundle\Form\CategorieType;
use EventsBundle\Form\RechercheCategorieType;
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

    public function listAction(Request $request)
    {   $categorie  = new Categorie();
        $form = $this->createForm(RechercheCategorieType::class,$categorie);
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Categorie::class)->findAll();

            if ($form->handleRequest($request)->isSubmitted())
                return $this->rechercheAction($request,$categorie);

        return $this->render('@Events/Categorie/liste_categorie.html.twig',
            array('categories' => $categories,
                'f' => $form->createView(),
                'uneRecherche' => false));
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

    public function rechercheAction(Request $request,Categorie $categorie){
        $form = $this->createForm(RechercheCategorieType::class);
        $form = $form->handleRequest($request);
        $categorieLibelle = array();
        $categorieDescription = array();


        if ($categorie->getLibelle() != '')
            $categorieLibelle = $this->getDoctrine()
                ->getRepository(Categorie::class)
                ->myfindByLibelle($categorie->getLibelle());

        if ($categorie->getDescription() != '')
            $categorieDescription = $this->getDoctrine()
                ->getRepository(Categorie::class)
                ->myfindByDescription($categorie->getDescription());

        if (sizeof($categorieLibelle) == 0 && sizeof($categorieDescription) == 0)
            $categories = $this->getDoctrine()->getManager()->getRepository(Categorie::class)->findAll();
        else
            $categories = $categorieLibelle + $categorieDescription ;

        return $this->render('@Events/Categorie/liste_categorie.html.twig',
            array('categories'=>$categories ,
                'f' => $form->createView() ,
                'nb' => sizeof($categories),
                'uneRecherche' => true
            ));
    }
}
