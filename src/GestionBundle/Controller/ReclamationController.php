<?php

namespace GestionBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use GestionBundle\Form\JugementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestionBundle\Form\ReclamationType;
use GestionBundle\Entity\Reclamation;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use EventsBundle\Entity\User;
use GestionBundle\Entity\Archive;


class ReclamationController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionBundle:Default:index.html.twig');
    }
//    public function afficheRAction()
//    {
//        $em = $this->getDoctrine()->getManager(); // instancier un objet em pour pouvoir acceder les fonctionnalites sous repositry
//        $rec = $em->getRepository("GestionBundle:Reclamation")->findAll(); //puis dans ce niveau on appelle getRepository
//        return $this->render('@Gestion/Reclamation/afficheR.html.twig', array('r' => $rec));
//    }

    public function afficheRAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();


        $reclamation1 = $em->getRepository("GestionBundle:Reclamation")->findAll();
        /*  $nb = $em->getRepository(Reclamation::class)->findByEtat('Archivée');*/
       // $nb=$em->getRepository(Reclamation::class)->recherchearchive1();
        /*$nb = count($reclamation2);*/


        foreach ($reclamation1 as $r) {

            $now = date_format(new \DateTime('now'), 'Y-m-d');
            $recdate = date_format($r->getDateReclamation(), 'Y-m-d');
            $datetime1 = strtotime($now);
            $datetime2 = strtotime($recdate);
            $secs = $datetime1 - $datetime2;// == return sec in difference
            $days = $secs / 86400; //86400 = 60*60*24 : les seconds par jour
            if ($days >= 30 && $r->getEtat()=="Traitée"){
                $r->setEtat("Archivée");
                $em->flush();
            }
        }


        return $this->render('@Gestion/Reclamation/afficheR.html.twig', array("r" => $reclamation1));

    }

    /*****************************Affichage des réclamations qui sont  archivées***********************/


    public function show_Admin_ArchiveAction()
    {

        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository("GestionBundle:Reclamation")->findBy(array('etat' => "Archivée"));
//        $nb=$em->getRepository(Reclamation::class)->recherchearchive2();

        return $this->render('@Gestion/Admin/List_Archive_Admin.html.twig', array("r" => $reclamation));

    }

    public function ajouterRAction(Request $request)
    {
        $r=new Reclamation();
//        $test2 = $request->query->get('id');
        //$test=$em->getRepository(User::class)->find($test);
        $Form=$this->createForm(ReclamationType::class,$r);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $r->setEtat("En attente");
            $r->setUser($this->getUser());
            $r->setDateReclamation(new \DateTime('now'));

            $r->setTarget_id($this->getUser()->getId());
            $em->persist($r);
            $em->flush();
            return $this->redirectToRoute('gestion_afficheRfront');
        }
        return $this->render('@Gestion/Reclamation/ajouterR.html.twig',array('form'=>$Form->createView()));
    }
    public function afficheRfrontAction()
    {
        $em = $this->getDoctrine()->getManager(); // instancier un objet em pour pouvoir acceder les fonctionnalites sous repositry
        $rec = $em->getRepository("GestionBundle:Reclamation")->findAll(); //puis dans ce niveau on appelle getRepository
        return $this->render('@Gestion/Reclamation/afficheRfront.html.twig', array('r' => $rec));
    }



    public function modifierRAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $classes = $em->getRepository(Reclamation::class)->find($id);
        if ($request->isMethod('post')) {
            $classes->setdateReclamation($request->get('dateReclamation'));
            $classes->settypeReclamation($request->get('typeReclamation'));
            $classes->setnumsalle($request->get('contenuReclamation'));
            $em->flush();
            return $this->redirectToRoute("gestion_ajouterR");
        }
        return $this->render('@Gestion/Reclamation/modifierR.html.twig', array('classe' => $classes));
    }


    public function deleteRAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $classes=$em->getRepository("GestionBundle:Reclamation")->find($id);
        $em->remove($classes);
        $em->flush();
        return $this->redirectToRoute('gestion_afficheR');
    }


    public function deleteRfrontAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $classes=$em->getRepository("GestionBundle:Reclamation")->find($id);
        $em->remove($classes);
        $em->flush();
        return $this->redirectToRoute('gestion_afficheRfront');
    }



    /***************************Stat ********************************/
    public function statistique_reclamationAction()
    {
        $pieChart = new PieChart();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT r.etat as statut,count(r.etat) as nb FROM GestionBundle:Reclamation r GROUP BY r.etat');
        $resultatt = $query->getResult();

        $data = array();
        foreach ($resultatt as $values) {
            $a = array($values['statut'], intval($values['nb']));
            array_push($data, $a);
        }
        if ($data == null) {
            return $this->render("@Gestion/Admin/404.html.twig");
        } else {
            $pieChart->getData()->setArrayToDataTable($data, true);
            $pieChart->getOptions()->setIs3D(true);
            $pieChart->getOptions()->setTitle("Pourcentages des réclamations par statut");
            $pieChart->getOptions()->setHeight(500);
            $pieChart->getOptions()->setWidth(900);
            $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
            $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
            $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
            $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
            $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

            return $this->render('@Gestion/Admin/statisticsReclamation.html.twig', array('piechart' => $pieChart));
        }
    }



    public function admin_traiter_reclamationAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $rec1 = $em->getRepository(Reclamation::class)->findAll();
        $nb = count($rec1);
        $rec2 = $em->getRepository(Reclamation::class)->find($id);

        $rec2->setEtat("Traitée");

        $em = $this->getDoctrine()->getManager();

        $em->persist($rec2);
        $em->flush();

        $rec1 = $em->getRepository(Reclamation::class)->findAll();
        return $this->render('@Gestion/Reclamation/afficheR.html.twig', array("r" => $rec1));

    }








    private function createEditForm_admin(User $coupon)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $form = $this->createForm(JugementType::class, $coupon, array(
                'action' => $this->generateUrl('score_update', array('id' => $coupon->getId())),
                'method' => 'PUT',
            ));

            $form->add('submit', SubmitType::class, array('label' => 'Confirmer'));

            return $form;}
        else {return $this->render("@Gestion/Admin/404.html.twig");}
    }




    public function passer_en_jugementAction($id)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            //$user = $this->getUser();
            $em = $this->getDoctrine()->getManager();

            /*$reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);*/
            /* $test = $request->query->get('id');*/
            $test=$em->getRepository(User::class)->find($id);

            if (!$test) {
                throw $this->createNotFoundException(' User n\'existe pas');
            }

            $editForm = $this->createEditForm_admin($test);

            return $this->render('@Gestion/Admin/edit_score.html.twig', array(
                'coupon'      => $test,
                'edit_form'   => $editForm->createView(),

            )); }else {return $this->render("@Gestion/Admin/404.html.twig");}
    }


    /*****************************La M-à-j : pour le jugement : à travers event doctrine ***********************/
    public function update_scoreAction(Request $request, $id)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $em = $this->getDoctrine()->getManager();

            $coupon = $this->getDoctrine()->getRepository(User::class)->find($id);

            if (!$coupon) {
                throw $this->createNotFoundException('User n\'existe pas');
            }


            $editForm = $this->createEditForm_admin($coupon);
            $editForm->handleRequest($request);

            if ($editForm->isValid()) {
                $em->persist($coupon);// coté doctrine : bech ne3lmou doctrine bech mba3ed law ken bech te5dem 3lih evenement tnajem directe
                $em->flush();// coté relationnelle




                if($coupon->getScore()>= 5)
                {
                    $coupon->setEnabled(0);
                    $em->persist($coupon);
                    $em->flush();


                }

                //var_dump($coupon->isEnabled());die();

//                $this->get('session')->getFlashBag()->add('notice1', array('type' => 'success', 'title' => 'Succés', 'message' => 'Le jugement est effectué avec succés.'));

                return $this->redirect($this->generateUrl('gestion_afficheR'));
            }

            return $this->render('@Gestion/Admin/edit_score.html.twig', array(
                'coupon'      => $coupon,
                'edit_form'   => $editForm->createView(),

            ));}else{return $this->render("@Gestion/Admin/404.html.twig");}
    }

}

