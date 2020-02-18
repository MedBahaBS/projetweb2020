<?php

namespace ClubBundle\Controller;


use ClubBundle\Entity\Don;
use ClubBundle\Form\DonType;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DonController extends Controller
{
    public function AfficherdonAction()
    {
        $dons=$this->getDoctrine()->getRepository(Don::class)->findAll();
        return $this->render('@Club/home/AfficherDon.html.twig',array('dons'=>$dons));
    }
    public function AjouterdonAction(Request $request)
    {

        $user = $this->getUser();
        $email=$user->getEmail();

        $don= new don();
        $don->setEmail($email);
        $don->setEtat(0);
        $form = $this->createForm(DonType::class,$don);

        $form=$form->handleRequest($request);


        if($form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();

            #MAIL TEST
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'TLS'))
                ->setUsername('alaeddinneg92@gmail.com')
                ->setPassword('Emnabenabda28749574')
            ;
            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
            // Create a message
            $message = (new Swift_Message('test object'))
                ->setFrom(['alaeddinneg92@gmail.com' => 'TEST123'])
                ->setTo($email)
                ->setBody('Here is the message itself')
            ;
            // Send the message
            $result = $mailer->send($message);


            return $this->redirectToRoute('admin_AfficherClub'); #change this
        }
        return $this->render('@Club/home/AjouterDon.html.twig',array('form'=>$form->createView()));
    }
    public function ModifierdonAction(Request $request, $id)
    {
        $don=$this->getDoctrine()->getRepository(Don::class)->find($id);
        $form=$this->createForm(DonType::class,$don);
        $form->handleRequest($request);
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();
            return $this->redirectToRoute("admin_AfficherDon");
        }
        return $this->render("@Club/home/ModifierDon.html.twig",array('form'=>$form->createView()));
    }
    public function SupprimerdonAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository(Don::class)->find($id); // search club
        $em->remove($don);
        $em->flush();//commit
        return $this->redirectToRoute('admin_AfficherDon');
    }

}
