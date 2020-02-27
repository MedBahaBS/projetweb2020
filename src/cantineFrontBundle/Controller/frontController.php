<?php

namespace cantineFrontBundle\Controller;

use cantineBundle\Entity\inscription;
use cantineBundle\Entity\menu;
use cantineFrontBundle\Entity\commentaire;
use cantineFrontBundle\Entity\email;
use cantineFrontBundle\Entity\inscritionEmail;
use cantineFrontBundle\Form\commentaireType;
use cantineFrontBundle\Form\inscritionEmailType;
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
        $query=$this->getDoctrine()->getManager()->createQuery('SELECT h from cantineBundle:menu h ORDER BY h.moyenneLike DESC')->setMaxResults(1);
        $top=$query->execute();
        $listecommantaires=$this->getDoctrine()->getRepository(commentaire::class)->findAll();
        return $this->render('@cantineFront/front/afficher_menu.html.twig',
            array('menu'=>$menu,"listeCommantaires"=>$listecommantaires,"top3"=>$top));
    }
    public function ajouterUneEtoileAction($id,$nombre,Request $request){
        $menu=$this->getDoctrine()->getRepository(menu::class)->find($id);
        $query=$this->getDoctrine()->getManager()->createQuery('SELECT h from cantineBundle:menu h ORDER BY h.moyenneLike DESC')->setMaxResults(1);
        $top=$query->execute();
        $listecommantaires=$this->getDoctrine()->getRepository(commentaire::class)->findAll();
        $nbrLike=$menu->getNbrLike();
        $nbrFoisLike=$menu->getNbrFoisLike();
        $nbrLike=$nbrLike+$nombre;
        $nbrFoisLike=$nbrFoisLike+1;
        $moyenne=$nbrLike/$nbrFoisLike;
        $menu->setMoyenneLike($moyenne);
        $menu->setNbrLike($nbrLike);
        $menu->setNbrFoisLike($nbrFoisLike);
        $this->getDoctrine()->getManager()->persist($menu);
        $this->getDoctrine()->getManager()->flush();
        $menu=$this->getDoctrine()
            ->getRepository(menu::class)
            ->findAll();
        return $this->render('@cantineFront/front/afficher_menu.html.twig',
            array('menu'=>$menu,'top3'=>$top,"listeCommantaires"=>$listecommantaires));
    }
    public function inscrptionAction()
    {
        $inscription=new inscription();
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $inscription->setUser($user);
        $this->getDoctrine()->getManager()->persist($inscription);
        $this->getDoctrine()->getManager()->flush();
        $menu=$this->getDoctrine()
            ->getRepository(menu::class)
            ->findAll();
        return $this->render('@cantineFront/front/afficher_menu.html.twig',
            array('menu'=>$menu));
    }
    public function  testeAction()
    {
        $message=\Swift_Message::newInstance()
            ->setSubject("jjjn")
            ->setFrom('linda.guesmi@esprit.tn')
            ->setTo('linda.guesmi@esprit.tn')
            ->setBody("on a approuvé votre inscription dans le club");
        $this->get('mailer')->send($message);
       return    $this->redirectToRoute('afficher_menu');
    }
    public function ajouterCommantaireAction(Request $request,$id){
        $commantaire=new commentaire();
        $menu=$this->getDoctrine()->getRepository(menu::class)->find($id);
        $listecommantaires=$this->getDoctrine()->getRepository(commentaire::class)->findAll();
        $form=$this->createForm(commentaireType::class , $commantaire);
        $user=$this->getUser();
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $commantaire->setUser($user);
            $commantaire->setMenu($menu);
            $this->getDoctrine()->getManager()->persist($commantaire);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('afficher_menu');
        }
        return $this->render('@cantineFront/front/commentaire.html.twig',array('form'=>$form->createView()));
    }
    public function inscriptionNewsLetterAction(Request $request)
    {
        $email=new inscritionEmail();
        $form=$this->createForm(inscritionEmailType::class,$email);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $this->getDoctrine()->getManager()->persist($email);
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->render('@cantineFront/front/inscriptionNewsLetter.html.twig',array('form'=>$form->createView()));
    }
}
