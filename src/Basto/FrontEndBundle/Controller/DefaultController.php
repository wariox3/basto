<?php

namespace Basto\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BastoFrontEndBundle:Default:index.html.twig');
    }
    public function menuAction()
    {
        return $this->render('BastoFrontEndBundle:Plantillas:menu.html.twig');
    }     
}
