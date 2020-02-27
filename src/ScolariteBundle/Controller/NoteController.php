<?php

namespace ScolariteBundle\Controller;

use ScolariteBundle\Entity\Note;
use ScolariteBundle\Form\NoteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NoteController extends Controller
{
    public function indexAction()
    {
        return $this->render('ScolariteBundle:Default:index.html.twig');
    }
    public function readnAction()
    {
        $note=$this->getDoctrine()->getRepository(Note::class)->findAll();
        return $this->render('@Scolarite/Note/readn.html.twig',array('notes'=>$note));
    }
    public function ajoutnAction(Request $request)
    {
        $note = new Note();
        $form = $this->createForm(NoteType::class,$note);

        $form=$form->handleRequest($request);

        if($form->isValid())
        {
            $moyenne=( $note->getNote1() + $note->getNote2() )/ 2;
            $note->setMoyenne($moyenne);
            $em= $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();
            return $this->redirectToRoute('scolarite_readn');
        }
        return $this->render('@Scolarite/Note/ajoutn.html.twig',array('form'=>$form->createView()));
    }
    public function modifiernAction(Request $request, $idnote)
    {
        $em = $this->getDoctrine()->getManager();
        $note = $em->getRepository(Note::class)->find($idnote); //récupération
        if ($request->isMethod('post')) {
            $note->setnote1($request->get('note1'));
            $note->setnote2($request->get('note2'));
            // $question->setnbrVue($request->get('nbrVue'));
            $note->setmoyenne($request->get('moyenne'));

            $em->flush(); //l'operation modifié
            return $this->redirectToRoute("scolarite_readn");
        }
        return $this->render('@Scolarite/Note/modifiern.html.twig', array('note' => $note));
    }
    public function ajoutfrontnAction(Request $request)
    {
        $note= new Note();
        $form = $this->createForm(NoteType::class,$note);
        $form=$form->handleRequest($request);

        if($form->isValid())
        {
            $moyenne=( $note->getNote1() + $note->getNote2() )/ 2;
            $note->setMoyenne($moyenne);
            $em= $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();
            return $this->redirectToRoute('scolaritereadfrontn');
        }
        return $this->render('@Scolarite/Note/ajoutfrontn.html.twig',array('form'=>$form->createView()));
    }
    public function readfrontnAction()
    {
        $note=$this->getDoctrine()->getRepository(Note::class)->findAll();
        return $this->render('@Scolarite/Note/readfrontn.html.twig',array('notes'=>$note));
    }

    public function modifierfrontnAction(Request $request, $idnote)
    {
        $em = $this->getDoctrine()->getManager();
        $note = $em->getRepository(Note::class)->find($idnote); //récupération
        if ($request->isMethod('post')) {
            $note->setnote1($request->get('note1'));
            $note->setnote2($request->get('note2'));
            // $question->setnbrVue($request->get('nbrVue'));
            $note->setmoyenne($request->get('moyenne'));

            $em->flush(); //l'operation modifié
            return $this->redirectToRoute("scolarite_readfrontn");
        }
        return $this->render('@Scolarite/Note/modifierfrontn.html.twig', array('notes' => $note));
    }

}
