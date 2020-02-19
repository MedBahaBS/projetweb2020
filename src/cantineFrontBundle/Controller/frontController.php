<?php

namespace cantineFrontBundle\Controller;

use cantineBundle\Entity\menu;
use cantineFrontBundle\Entity\email;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class frontController extends Controller
{
    public function afficherMenuAction()
    {
        $menu=$this->getDoctrine()
            ->getRepository(menu::class)
            ->findAll();
        return $this->render('@cantineFront/front/afficher_menu.html.twig',
            array('menu'=>$menu));
    }
}
