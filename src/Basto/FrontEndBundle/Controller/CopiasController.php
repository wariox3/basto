<?php

namespace Basto\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CopiasController extends Controller
{
    public function listaAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $arCopias = $this->getDoctrine()->getRepository('BastoFrontEndBundle:Copias')->findAll();                
        return $this->render('BastoFrontEndBundle:Consultas/Copias:lista.html.twig', array('arCopias' => $arCopias));
    }     
}
