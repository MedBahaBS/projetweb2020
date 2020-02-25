<?php

namespace cantineBundle\Controller;

use cantineBundle\Entity\cantine;
use cantineBundle\Entity\commentaire;
use cantineBundle\Entity\inscription;
use cantineBundle\Entity\menu;
use cantineBundle\Entity\plat;
use cantineBundle\Form\commentaireType;
use cantineBundle\Form\menuType;
use cantineBundle\Form\platType;
use cantineFrontBundle\Entity\email;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Egyg33k\CsvBundle\Egyg33kCsvBundle;
use Symfony\Component\HttpFoundation\Response;

class monController extends Controller
{
    public function ajouterplatAction(Request $request)
    {
        $plat=new plat();
        $Form=$this->createForm(platType::class,$plat);
        $nom_initial = $plat->getImage();
        $Form->handleRequest($request);
        if($Form->isSubmitted()&&$Form->isValid()){
            $verif=$Form->get('image')->getData();
            if($verif == null){

                $plat->setImage($nom_initial);
                $this->getDoctrine()->getManager()->persist($plat);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('afficherplat');
            }
            $image = $plat->getImage();
            $name_image=uniqid().'.'.$image->guessExtension();
            $image->move($this->getParameter('image_directory'), $name_image);
            $plat->setImage($name_image);
            $this->getDoctrine()->getManager()->persist($plat);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('afficherplat');

        }
        return $this->render('@cantine/mon/ajouterplat.html.twig',
            array('form'=>$Form->createView()));
    }

    public function afficherplatAction(Request $request)
    {
        $query=$this->getDoctrine()->getManager()->createQuery("SELECT a FROM cantineBundle:plat a");
        $paginator=$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            2
        );

        // parameters to template
        return $this->render('@cantine/mon/afficherplat.html.twig',array('pagination' => $pagination));/*
        $plat=$this->getDoctrine()
            ->getRepository(plat::class)
            ->findAll();
        return $this->render('@cantine/mon/afficherplat.html.twig',
            array('p'=>$plat));*/
    }

    public function supprimerplatAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $plat=$em->getRepository(plat::class)->find($id);
        $em->remove($plat);
        $em->flush();
        return $this->redirectToRoute('afficherplat');
    }
    public function testerEmailAction()
    {
        $listeAbonne=$this->getDoctrine()->getRepository(inscription::class)->findAll();
        $snappy=$this->get('knp_snappy.pdf');
        $file_name="les inscription";
        return new Response(
            $snappy->getOutputFromHtml($this->renderView('@cantine/mon/afficherInscriptionPdf.html.twig',array("listeInscription"=>$listeAbonne))), 200,
            array(
                'Content-Type'=>'application/pdf',
                'Content-Disposition'=>'attachement; filename="'.$file_name.'.pdf'
            )
        );
    }
    public function modifierplatAction(Request $request,$id){

        $plat= new plat();
        $em=$this->getDoctrine()->getManager();
        $plat=$em->getRepository(plat::class)->find($id);
        $form=$this->createForm(platType::class,$plat);
        $nom_initial = $plat->getImage();
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $verif=$form->get('image')->getData();
            if($verif == null){

                $plat->setImage($nom_initial);
                $this->getDoctrine()->getManager()->persist($plat);
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('afficherplat');
            }
            $image = $plat->getImage();
            $name_image=uniqid().'.'.$image->guessExtension();
            $image->move($this->getParameter('image_directory'), $name_image);
            $plat->setImage($name_image);
            $this->getDoctrine()->getManager()->persist($plat);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('afficherplat');
        }

        return $this->render('@cantine/mon/modifierplat.html.twig', array('form' => $form->createView()));

    }
    public function ajoutermenuAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locationRepo = $em->getRepository('cantineBundle:menu');
        $nb = $locationRepo->getNb();
        if($nb<5){
        $menu=new menu();
        $form=$this->createForm(menuType  ::class,$menu);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $entree=$menu->getEntree();
            $entree->setStatus("reserve");
            $menuPrincipal=$menu->getPlatprincipal();
            $menuPrincipal->setStatus("reserve");
            $dessert=$menu->getDessert();
            $dessert->setStatus("reserve");
            $em->persist($menu);
            $em->persist($entree);
            $em->persist($menuPrincipal);
            $em->persist($dessert);
            $em->flush();
            return $this->redirectToRoute('affichermenu');
        }}
        else
        {
            $this->addFlash('success', 'Vous ne pouvez plus ajouter des menu . Vous devez supprimer un menu ');
            return $this->redirectToRoute('affichermenu');
        }
        return $this->render('@cantine/mon/ajoutermenu.html.twig',
            array('form'=>$form->createView(),'nb'=>$nb));


    }

    public function affichermenuAction()
    {
        $menu=$this->getDoctrine()
            ->getRepository(menu::class)
            ->findAll();
        return $this->render('@cantine/mon/affichermenu.html.twig',
            array('m'=>$menu));
    }

    public function supprimermenuAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $menu=$em->getRepository(menu::class)->find($id);
        $em->remove($menu);
        $em->flush();
        return $this->redirectToRoute('affichermenu');
    }


    public function modifiermenuAction(Request $request,$id){

        $menu= new plat();
        $em=$this->getDoctrine()->getManager();
        $menu=$em->getRepository(menu::class)->find($id);
        $form=$this->createForm(menuType::class,$menu);

        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('affichermenu');
        }

        return $this->render('@cantine/mon/modifiermenu.html.twig', array('form' => $form->createView()));

    }
    public function supprimerInscriptionAction($id)
    {
        $club=$this->getDoctrine()->getRepository(inscription::class)->find($id);
        $this->getDoctrine()->getManager()->remove($club);
        $this->getDoctrine()->getManager()->flush();
        $listeAbonne=$this->getDoctrine()->getRepository(inscription::class)->findAll();
        return $this->render('@cantine/mon/afficherInscription.html.twig', array("listeInscription"=>$listeAbonne));
    }
    public function afficherInscriptionAction()
    {
        $listeAbonne=$this->getDoctrine()->getRepository(inscription::class)->findAll();
        return $this->render('@cantine/mon/afficherInscription.html.twig', array("listeInscription"=>$listeAbonne));
    }
    public function validerAction($id)
    {
        $cantine=$this->getDoctrine()->getRepository(cantine::class)->find('1');
        $cap=$cantine->getCapacite();
        $listeAbonne=$this->getDoctrine()->getRepository(inscription::class)->findAll();
        if($cap>0)
        {
        $cantine->setCapacite($cap-1);
        $this->getDoctrine()->getManager()->persist($cantine);
        $this->getDoctrine()->getManager()->flush();
        $inscription=$this->getDoctrine()->getRepository(inscription::class)->find($id);
        $status=$inscription->getStatus();
        $inscription->setStatus("validee");
        $this->getDoctrine()->getManager()->persist($inscription);
        $this->getDoctrine()->getManager()->flush();
        $user=$inscription->getUser();
        $message=\Swift_Message::newInstance()
            ->setSubject("confirmation inscription cantine")
            ->setFrom('linda.guesmi@esprit.tn')
            ->setTo($user->getEmail())
            ->setBody("on a approuvé votre inscription dans la cantine");
        $this->get('mailer')->send($message);
        }
        else{
            $inscription=$this->getDoctrine()->getRepository(inscription::class)->find($id);
            $user=$inscription->getUser();
            $message=\Swift_Message::newInstance()
                ->setSubject("echec d'inscription dans la cantine")
                ->setFrom('linda.guesmi@esprit.tn')
                ->setTo($user->getEmail())
                ->setBody("Nous sommes desoles. on a atteint la capacite maximale. Nous vous verrons tres prochainement");
            $this->get('mailer')->send($message);
        }
        return $this->render('@cantine/mon/afficherInscription.html.twig', array("listeInscription"=>$listeAbonne));
    }
    public function exportmenuAction()
    {
        $em= $this->getDoctrine()->getManager();
        $menus = $em->getRepository(menu::class)->findAll();
        #Writer
        $writer = $this->container->get('egyg33k.csv.writer');
        $csv = $writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne([ 'jourMenu'.";".'entree'.";".'platPrincipal'.";".'dessert' ]);
        foreach ($menus as $menu) {
            $csv->insertOne([$menu->getJourMenu().";".
                $menu->getEntree()->getNomPlat().";".
                $menu->getPlatprincipal()->getNomPlat().";".
               $menu->getDessert()->getNomPlat() ]);
        }
        $csv->output('menu.csv');
        die();
    }

}
