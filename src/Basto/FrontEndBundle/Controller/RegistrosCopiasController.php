<?php

namespace Basto\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrosCopiasController extends Controller
{
    public function listaAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $arRegistrosCopias = $this->getDoctrine()->getRepository('BastoFrontEndBundle:RegistrosCopias')->findAll();                
        return $this->render('BastoFrontEndBundle:Consultas/RegistrosCopias:lista.html.twig', array('arRegistrosCopias' => $arRegistrosCopias));
    }     
}
