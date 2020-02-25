<?php

namespace cantineFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@cantineFront/Default/indexfront.html.twig');
    }
}
