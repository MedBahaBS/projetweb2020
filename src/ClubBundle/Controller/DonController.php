<?php

namespace ClubBundle\Controller;


use ClubBundle\Entity\Don;
use ClubBundle\Form\DonsearchType;
use ClubBundle\Form\DonType;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

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


            $message = (new \Swift_Message('test object'))
                ->setFrom('genuis.school.pidev@gmail.com')
                ->setTo($email)
                ->setBody($this->renderView('@Club/home/notif.html.twig'),'text/html')
            ;
            // Send the message
            $result = $this->get('mailer')->send($message);


            return $this->redirectToRoute('afficher_merci'); #change this
        }
        return $this->render('@Club/home/AjouterDon.html.twig',array('form'=>$form->createView()));
    }
    public function ModifierdonAction(Request $request, $id)
    {
        $don=$this->getDoctrine()->getRepository(Don::class)->find($id);
        $don->setEtat(0);
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
    public function merciAction()
    {
        return $this->render('@Club/home/affichernotifconfirmer.html.twig');
    }
    public function confirmerAction()
    {
        $user = $this->getUser();
        $email=$user->getEmail();
        $dons=$this->getDoctrine()->getRepository(Don::class)->findBy(['email' => $email]);
        return $this->render('@Club/home/confirmer.html.twig',array('dons'=>$dons));
    }
    public function confAction(Request $request,$id)
    {
        $don=$this->getDoctrine()->getRepository(Don::class)->find($id);
        $don->setEtat(1);

            $em=$this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();

       /* $account_sid = '';
        $auth_token = '';
        $twilio_number = "";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
        // Where to send a text message (your cell phone?)
            '',
            array(
                'from' => $twilio_number,
                'body' => 'I sent this message in under 10 minutes!'
            )
        );*/


            return $this->redirectToRoute("confirmer_don");


    }
    public function rechercherAction()
    {
        $form = $this->createForm(new DonsearchType());
        $request = $this->getRequest();
        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $data = $this->getRequest()->request->get('hurricaneScript_annoncebundle_rechercheannonces');
                $liste_annonces = $em->getRepository('ClubBundle:Don')->findDonByParametres($data);
                return $this->render('@Club/home/confirmer.html.twig', array('liste_annonces' => $liste_annonces));
            }
        }
        return $this->render('@Club/home/AfficherDon.html.twig', array('form' => $form->createView()));
    }
}
