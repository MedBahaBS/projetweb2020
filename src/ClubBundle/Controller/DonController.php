<?php

namespace ClubBundle\Controller;


use ClubBundle\Entity\Don;
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
        $email='galaeddinne@gmail.com';
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
                ->setFrom(['alaeddinneg92@gmail.com' => 'GENIUS'])
                ->setTo([$email => 'TEST'])
                ->setBody($this->renderView('@Club/home/notif.html.twig'),'text/html')
            ;
            // Send the message
            $result = $mailer->send($message);


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

        $sid = "AC73bcf09348ce0414e8e2a3f861e1d21a";
        $token  = "b9ef5f02093c10d6086d81d96ca25166";
        try {
            $twilio = new Client($sid, $token);
        } catch (ConfigurationException $e) {
        }

        $message = $twilio->messages
            ->create("+21623613445", // to
                array(
                    "body" => 'Ala',
                    "from" => "+12025109194"
                )
            );


            return $this->redirectToRoute("confirmer_don");


    }
}
