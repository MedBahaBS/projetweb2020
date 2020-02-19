<?php

namespace cantineBundle\Controller;

use cantineBundle\Entity\menu;
use cantineBundle\Entity\plat;
use cantineBundle\Form\menuType;
use cantineBundle\Form\platType;
use cantineFrontBundle\Entity\email;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Egyg33k\CsvBundle\Egyg33kCsvBundle;
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

    public function afficherplatAction()
    {
        $plat=$this->getDoctrine()
            ->getRepository(plat::class)
            ->findAll();
        return $this->render('@cantine/mon/afficherplat.html.twig',
            array('p'=>$plat));
    }
    public function supprimerplatAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $plat=$em->getRepository(plat::class)->find($id);
        $em->remove($plat);
        $em->flush();
        return $this->redirectToRoute('afficherplat');
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

    public function exportmenuAction()
    {
        $em= $this->getDoctrine()->getManager();
        $menus = $em->getRepository(menu::class)->findAll();
        #Writer
        $writer = $this->container->get('egyg33k.csv.writer');
        $csv = $writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne([ 'jourMenu'.";".'entree'.";".'platPrincipal'.";".'dessert' ]);
        foreach ($menus as $menu) {
            $csv->insertOne([$menu->getJourMenu()."".
                $menu->getEntree()->getNomPlat()." ".
                $menu->getPlatprincipal()->getNomPlat()."".
               $menu->getDessert()->getNomPlat() ]);
        }
        $csv->output('menu.csv');
        die();
    }

}
