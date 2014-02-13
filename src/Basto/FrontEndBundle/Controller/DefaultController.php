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
        $usuario = new \Basto\FrontEndBundle\Entity\User();
        $usuario = $this->get('security.context')->getToken()->getUser();
        $strUsuario = $usuario->getUsername();
        return $this->render('BastoFrontEndBundle:plantillas:menu.html.twig', array('Usuario' => $strUsuario));
    }     
}
