<?php

namespace EventsBundle\Controller;

use cantineBundle\Entity\menu;
use CourBundle\Entity\cours;
use EventsBundle\Entity\Evenement;
use EventsBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {   $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User:: class)->findAll();
        $nbEleves = sizeof($em->getRepository(User:: class)->findBy(array('roles' => 'ROLE_ELEVE')));
        $nbEnseignants = sizeof($em->getRepository(User:: class)->findBy(array('roles' => 'ROLE_ENSEIGNANT'))); ;
        /*
        for ($i=0;sizeof($users);$i++)
            {
                if ($users[$i]->hasRole('ROLE_ELEVE'))
                    $nbEleve++;
                if ($users[$i]->hasRole('ROLE_ENSEIGNANT'))
                    $nbEnseignants++;
            }*/
        $nbCours = sizeof($em->getRepository(Cours::class)->findAll());
        $cours =  $em->getRepository(cours:: class)->findAll();

        $events =  $em->getRepository(Evenement:: class)->findAll();
        $nbMenus = sizeof($em->getRepository(Menu::class)->findAll());
        return $this->render("@Events/indexback.html.twig",
            array('nbEleves' => $nbEleves,
                'nbEnseignants' => $nbEnseignants,
                'nbCours' => $nbCours,
                'nbMenus' => $nbMenus,
                'Cours'=> $cours,
                'Events'=> $events));
    }
}
