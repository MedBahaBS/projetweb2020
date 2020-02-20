<?php

namespace ReclamationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use ReclamationBundle\Entity\Reclamation;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use ReclamationBundle\Form\EvaluationType;
use ReclamationBundle\Form\Reclamation_2Type;
use ReclamationBundle\Entity\Evaluation;
use ReclamationBundle\Entity\Evaluation_t;
use ReclamationBundle\Form\RechercheThreeType;
use ReclamationBundle\Form\RechercheTwoType;
use ReclamationBundle\Form\JugementType;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

class ReclamationController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Reclamation/Reclamation/index.html.twig');
    }



    /*****************************Partie Membre : ajout spécifié ***********************/
    public function ajouterReclamationUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reclamation();



        $test = $request->query->get('id');
        $test=$em->getRepository(User::class)->find($test);



        $test2 = $request->query->get('id');

        if ($request->isMethod('POST')) {
            $reclamation->setMail($this->getUser()->getEmail());

            $reclamation->setShortDescr($request->get('short'));
            $reclamation->setPhone($request->get('phone'));
            $reclamation->setNatureReclamation($request->get('sujet'));
            $reclamation->setDescription($request->get('desc'));
            $reclamation->setDate(new \DateTime('now'));
            $reclamation->setEtat("En attente");
            $reclamation->setUser($this->getUser());
            $reclamation->setTarget($test);
            $reclamation->setTarget_id($test2);
            $em->persist($reclamation);
            $em->flush();


            return $this->redirectToRoute("fixit_user_homepage");
        }
        return $this->render('@Reclamation/Reclamation/ajouterReclamationUser.html.twig', array(

        ));
    }
    /*****************************Partie Membre : ajout non spécifié ***********************/
    public function ajouterReclamationUser_type2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reclamation();

        if ($request->isMethod('POST')) {
            $reclamation->setMail($this->getUser()->getEmail());

            $reclamation->setShortDescr($request->get('short'));
            $reclamation->setPhone($request->get('phone'));
            $reclamation->setNatureReclamation($request->get('sujet'));
            $reclamation->setDescription($request->get('desc'));
            $reclamation->setDate(new \DateTime('now'));
            $reclamation->setEtat("En attente");
            $reclamation->setUser($this->getUser());

            $em->persist($reclamation);
            $em->flush();


            return $this->redirectToRoute("fixit_user_homepage");
        }
        return $this->render('@Reclamation/Reclamation/ajouterReclamationUser.html.twig', array(

        ));
    }




    /*****************************Partie Prestataire : ajout non spécifié ***********************/
    public function ajouterReclamationUser_type2_prestAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reclamation();

        if ($request->isMethod('POST')) {
            $reclamation->setMail($this->getUser()->getEmail());

            $reclamation->setShortDescr($request->get('short'));
            $reclamation->setPhone($request->get('phone'));
            $reclamation->setNatureReclamation($request->get('sujet'));
            $reclamation->setDescription($request->get('desc'));
            $reclamation->setDate(new \DateTime('now'));
            $reclamation->setEtat("En attente");
            $reclamation->setUser($this->getUser());

            $em->persist($reclamation);
            $em->flush();


            return $this->redirectToRoute("fixit_user_homepage");
        }
        return $this->render('@Reclamation/Reclamation/ajouterReclamationPrest.html.twig', array(

        ));
    }

    /*****************************Partie Membre ***********************/
    public function ajouterEvaluationAction(Request $request)
    {
        $evaluation = new Evaluation();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findAll();
        $form = $this->createForm(EvaluationType::class,$evaluation);
        $form->handleRequest($request);
        $test = $request->query->get('id');
        $test2 = $request->query->get('id');
        $test=$em->getRepository(User::class)->find($test);
        $testwo = $request->query->get('nbr');
        if ($form->isValid() && $form->isSubmitted()){
            $evaluation->setDateEvaluation(new \DateTime('now'));
            $evaluation->setUser($this->getUser());
            $evaluation->setTarget($test);
            $evaluation->setNbrEtoiles($testwo);
            $evaluation->setTarget_id($test2);
            $em->persist($evaluation);
            $em->flush();
            return $this->render('@Reclamation/Reclamation/okayEvaluation.html.twig');
        }

        return $this->render('@Reclamation/Reclamation/ajouterEvaluation.html.twig', array(
            'form' => $form->createView()
        ));
    }







    /*****************************Partie Membre : recherche  par (nom) ***********************/
    public function recherchePrestataireAction(Request $request)
    { $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(RechercheTwoType::class, $user);
        $form = $form->handleRequest($request);
        $evaluation = $em->getRepository(Evaluation::class)->findBy(array('user'=>$this->getUser()));
        if ($form->isValid()) {
            $name = $user->getUsername();
            $user = $this->getDoctrine()->getRepository(User::class)
                ->findByusername($name);


            return $this->render('@Reclamation/Reclamation/afterRechercheNom.html.twig', array(
                'evaluations' => $evaluation,
                'users' => $user
            ));
        }
        return $this->render('@Reclamation/Reclamation/Recherche_Par_Nom.html.twig', array(
            'form' => $form->createView()

        ));
    }

    /*****************************Partie Membre : affichage pour l'evaluation ***********************/
    public function afficherEvaluationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evaluation = $em->getRepository(Evaluation_t::class)->findBy(array('user'=>$this->getUser()));
        $user = $em->getRepository(User::class)->findAll();

        foreach ($evaluation as $e) {
            unset($user[array_search($e->getTarget(),$user)]);
        }



        return $this->render('@Reclamation/Reclamation/afficherEvaluation.html.twig', array(
            'evaluations' => $evaluation,
            'users' => $user
        ));
    }














    /*****************************Partie Membre : recherche  par (titre) ***********************/
    public function rechercheServiceAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(RechercheThreeType::class, $user);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $service = $user->getTitre();
            $user = $this->getDoctrine()->getRepository(User::class)
                ->findBytitre($service);

            return $this->render('@Reclamation/Reclamation/afterRechercheTitre.html.twig', array(
                'users' => $user
            ));
        }
        return $this->render('@Reclamation/Reclamation/Recherche_Par_Titre.html.twig', array(
            'form' => $form->createView()

        ));
    }




    /*****************************Partie Membre : la recherche et l'evaluation ***********************/
    public function listeMesPrestatairesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findAll();
        /*$evaluation = $em->getRepository(Evaluation::class)->findBy(array('user'=>$this->getUser()));*/
        return $this->render('@Reclamation/Reclamation/listeMesPrestataires.html.twig', array(
            /* 'evaluations' => $evaluation,*/
            'users' => $user
        ));
    }





    /*****************************Consulter mes réclamations pour les deux : membre et prestataire***********************/

    public function showAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $reclamation = $em->getRepository(Reclamation::class)->findBy(array('user'=>$this->getUser()));
        $array=array();

        foreach ($reclamation as $r) {


            if ($r->getEtat() != "Archivée") {
                $array[] = $r;

            }
        }

        $user=$this->getUser();
        $id=$user->getId();
        $nb=$em->getRepository(Reclamation::class)->recherchearchive11($id);
       /* $nb = count($reclamation);*/


        return $this->render('@Reclamation/Reclamation/List.html.twig', array("reclamtions" => $array,"nb"=>$nb));

    }

    /*****************************build formulaire pour faire la mise à jour  ***********************/

    private function createEditForm(Reclamation $coupon)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $form = $this->createForm(Reclamation_2Type::class, $coupon, array(
                'action' => $this->generateUrl('reclamation_update', array('id' => $coupon->getId())),
                'method' => 'PUT',
            ));

            $form->add('submit', SubmitType::class, array('label' => 'Modifier'));

            return $form;}
        else {return $this->render("@Reclamation/Reclamation/404.html.twig");}
    }




    public function edit_my_reclamationAction($id)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();

            $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

            if (!$reclamation) {
                throw $this->createNotFoundException('Cette réclamation n\'existe pas');
            }

            $editForm = $this->createEditForm($reclamation);

            return $this->render('@Reclamation/Reclamation/edit_my_reclamation.html.twig', array(
                'coupon'      => $reclamation,
                'edit_form'   => $editForm->createView(),

            )); }else {return $this->render("@Reclamation/Reclamation/404.html.twig");}
    }



    /*****************************La M-à-j ***********************/
    public function updateAction(Request $request, $id)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $em = $this->getDoctrine()->getManager();

            $coupon = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

            if (!$coupon) {
                throw $this->createNotFoundException('Cette réclamation n\'existe pas');
            }


            $editForm = $this->createEditForm($coupon);
            $editForm->handleRequest($request);

            if ($editForm->isValid()) {
                $em->flush();


                $this->get('session')->getFlashBag()->add('notice1', array('type' => 'success', 'title' => 'Succés', 'message' => 'Votre Réclamation est modifiée avec succés.'));

                return $this->redirect($this->generateUrl('ListR'));
            }

            return $this->render('@Reclamation/Reclamation/edit_my_reclamation.html.twig', array(
                'coupon'      => $coupon,
                'edit_form'   => $editForm->createView(),

            ));}else{return $this->render("@Reclamation/Reclamation/404.html.twig");}
    }


    /*****************************La suppression cote membre***********************/
    public function supprimer_reclamtions_membreAction(Request $request, $id)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $em = $this->getDoctrine()->getManager();
            $coupon = $this->getDoctrine()->getRepository(Reclamation::class)->findOneBy(array('id'=>$id));
            $em->remove($coupon);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice2', array('type' => 'success', 'title' => 'Succés', 'message' => 'Votre Réclamation est supprimée avec succés.'));
            return $this->redirect($this->generateUrl('ListR')); }
        else{return $this->render("@Reclamation/Reclamation/404.html.twig");}
    }







    /*****************************Partie Admin ***********************/







    /*****************************Consulter les réclamations***********************/

   /* public function show_AdminAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $reclamation = $em->getRepository(Reclamation::class)->findAll();

        $nb = count($reclamation);


        return $this->render('@Reclamation/Admin/List_Admin.html.twig', array("reclamtions" => $reclamation,"nb"=>$nb));

    }*/

    /*****************************Affichage des réclamations qui ne sont pas archivées***********************/
    public function show_AdminAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $reclamation1 = $em->getRepository(Reclamation::class)->findAll();
      /*  $nb = $em->getRepository(Reclamation::class)->findByEtat('Archivée');*/
        $nb=$em->getRepository(Reclamation::class)->recherchearchive1();
        /*$nb = count($reclamation2);*/


        foreach ($reclamation1 as $r) {

            $now = date_format(new \DateTime('now'), 'Y-m-d');
            $recdate = date_format($r->getDate(), 'Y-m-d');
            $datetime1 = strtotime($now);
            $datetime2 = strtotime($recdate);
            $secs = $datetime1 - $datetime2;// == return sec in difference
            $days = $secs / 86400; //86400 = 60*60*24 : les seconds par jour
            if ($days >= 30 && $r->getEtat()=="Traitée"){
                $r->setEtat("Archivée");
                $em->flush();
            }
        }


        return $this->render('@Reclamation/Admin/List_Admin.html.twig', array("reclamtions" => $reclamation1,"nb"=>$nb));

    }

    /*****************************Affichage des réclamations qui sont  archivées***********************/


    public function show_Admin_ArchiveAction()
    {

        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository("ReclamationBundle:Reclamation")->findBy(array('etat' => "Archivée"));
        $nb=$em->getRepository(Reclamation::class)->recherchearchive2();

        return $this->render('@Reclamation/Admin/List_Archive_Admin.html.twig', array("reclamtions" => $reclamation,"nb"=>$nb));

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
        return $this->render('@Reclamation/Admin/List_Admin.html.twig', array("reclamtions" => $rec1,"nb"=>$nb));

    }


    /*****************************La suppression cote admin***********************/
    public function supprimer_reclamtions_membre_adminAction(Request $request, $id)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $em = $this->getDoctrine()->getManager();
            $coupon = $this->getDoctrine()->getRepository(Reclamation::class)->findOneBy(array('id'=>$id));
            $em->remove($coupon);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice2', array('type' => 'success', 'title' => 'Succés', 'message' => 'La Réclamation est supprimée avec succés.'));
            return $this->redirect($this->generateUrl('ListR_Admin')); }
        else{return $this->render("@Reclamation/Reclamation/404.html.twig");}
    }







    /********************************************Jugement*******************************************************/

          /*****************************build formulaire pour faire la mise à jour  ***********************/

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
        else {return $this->render("@Reclamation/Admin/404.html.twig");}
    }




    public function passer_en_jugementAction($id)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();

            /*$reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);*/
           /* $test = $request->query->get('id');*/
            $test=$em->getRepository(User::class)->find($id);

            if (!$test) {
                throw $this->createNotFoundException(' User n\'existe pas');
            }

            $editForm = $this->createEditForm_admin($test);

            return $this->render('@Reclamation/Admin/edit_score.html.twig', array(
                'coupon'      => $test,
                'edit_form'   => $editForm->createView(),

            )); }else {return $this->render("@Reclamation/Admin/404.html.twig");}
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

                $this->get('session')->getFlashBag()->add('notice1', array('type' => 'success', 'title' => 'Succés', 'message' => 'Le jugement est effectué avec succés.'));

                return $this->redirect($this->generateUrl('ListR_Admin'));
            }

            return $this->render('@Reclamation/Admin/edit_score.html.twig', array(
                'coupon'      => $coupon,
                'edit_form'   => $editForm->createView(),

            ));}else{return $this->render("@Reclamation/Admin/404.html.twig");}
    }



    /***************************Stat ********************************/
    public function statistique_reclamationAction()
    {
        $pieChart = new PieChart();
        $em= $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT r.etat as statut,count(r.etat) as nb FROM ReclamationBundle:Reclamation r GROUP BY r.etat');
        $resultat=$query->getResult();

        $data=array();
        foreach ($resultat as $values){
            $a=array($values['statut'],intval($values['nb']));
            array_push($data,$a);
        }
        if ( $data == null   ){
            return $this->render("@Reclamation/Admin/404.html.twig");
        }else {
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

            return $this->render('@Reclamation/Admin/statisticsReclamation.html.twig', array('piechart' => $pieChart));
        }

    }














    /*   public function afficherReclamationUserAction()
       {
           $em = $this->getDoctrine()->getManager();
           $reclamation = $em->getRepository(Reclamation::class)->findBy(array('user'=>$this->getUser()));
           $user = $em->getRepository(User::class)->findAll();

           return $this->render('@Reclamation/Reclamation/afficherReclamationUser.html.twig', array(
               'reclamations' => $reclamation,
               'users'=>$user
           ));
       }*/
















































}
