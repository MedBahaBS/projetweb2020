<?php

namespace GestionBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestionBundle\Form\ReclamationType;
use GestionBundle\Entity\Reclamation;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;


class ReclamationController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionBundle:Default:index.html.twig');
    }
    public function afficheRAction()
    {
        $em = $this->getDoctrine()->getManager(); // instancier un objet em pour pouvoir acceder les fonctionnalites sous repositry
        $rec = $em->getRepository("GestionBundle:Reclamation")->findAll(); //puis dans ce niveau on appelle getRepository
        return $this->render('@Gestion/Reclamation/afficheR.html.twig', array('r' => $rec));
    }
    public function ajouterRAction(Request $request)
    {
        $r=new Reclamation();
        $Form=$this->createForm(ReclamationType::class,$r);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $r->setEtat("En cours");
            $r->setUser($this->getUser());
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
}

