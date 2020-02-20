<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\BlaBla;

class DefaultController extends Controller
{
    /*public function indexAction()
    {
        //$this->denyAccessUnlessGranted('IS_FULLY_AUTHETIFICATED');
        //$this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('MainBundle:Default:index.html.twig');
    }*/

    public function choixAction()
    {
        return $this->render('@Main\Default\choix.html.twig');
    }

    public function creationcompteAction()
    {
        return $this->render('@Main\Default\creationcompte.html.twig');
    }

    public function indexAction()
    {

        if ($this->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('gestion_afficheC');
        }
        if ($this->isGranted('ROLE_PARENT')){

            return $this->redirectToRoute('gestion_ajouterR');}

        if ($this->isGranted('ROLE_ELEVE')){

            return $this->redirectToRoute('acceuil');}

        return $this->render('MainBundle:Default:index.html.twig');
    }
    public function adminAction()
    {

        if ($this->isGranted('ROLE_ADMIN')){

            return $this->render('MainBundle:Default:back.html.twig');
        }
        else return $this->redirectToRoute('fixit_user_homepage');
    }
	
	
	
	
	
	 public function testAction()
    {

        $em = $this->getDoctrine()->getManager();
        $blabla = new BlaBla();
        $blabla->setNom("test form controller");
        $em->persist($blabla);
        $em->flush();
        return $this->render('default/test.html.twig');
    }

	
	
	

}
