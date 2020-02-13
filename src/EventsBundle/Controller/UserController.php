<?php

namespace EventsBundle\Controller;

use EventsBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('EventsBundle:Default:index.html.twig');
    }

    public function ajouterRoleAction($role,$username)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(array('username' => $username));
        $user->addRole($role);
        $em->persist($user);
        $em->flush();
        return $this->render('@Events/Evenement/accueil.html.twig');
    }

}
