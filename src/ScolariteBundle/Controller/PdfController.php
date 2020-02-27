<?php

namespace ScolariteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PdfController extends Controller
{ public function pdfAction()
{
    $user = $this->get('security.token_storage')->getToken()->getUser();


    $em = $this->getDoctrine()->getManager();
    $notes=$em->getRepository('ScolariteBundle:Note')->findAll();




    $html = $this->renderView('@Scolarite/Pdf/notes_pdf.html.twig',array('notes'=>$notes));



    $filename = sprintf('Notes-%s.pdf', date('Y-m-d'));

    return new Response(
        $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
        200,
        [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $filename), 'encoding' => 'utf-8',
        ]
    );
    return $this->redirectToRoute('scolaritereadfrontn');


}









}
