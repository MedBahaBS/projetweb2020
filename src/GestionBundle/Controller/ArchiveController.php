<?php

namespace GestionBundle\Controller;

use GestionBundle\Entity\Archive;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArchiveController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $archives = $em->getRepository(Archive::class)->findAll();

        return $this->render('@Gestion/Reclamation/archiverR.html.twig', array(
            'archives' => $archives,
        ));
    }


}
